$('#feedlist').live('pageinit', function(event) {
  fixLinks();
  $.getJSON('activityfeed.json', function(data) {
    var updates = [];

    $.each(data, function(idx, obj) {
      console.log(obj);
      update = '<div class="update-' + obj.type + '">';
      update += '<img class="update-icon" src="' + obj.icon + '" />';
      update += '<span class="user-fullname" />'+obj.user_fullname+'</span>';
      if (obj.type == 'rating') {
        update += '<span class="update-text"> rated </span>';
      } else if (obj.type == 'achievement') {
        update += '<span class="update-text"> achieved the </span>';
      } else if (obj.type == 'post') {
        update += '<span class="update-text"> posted at </span>';
      }
      if (obj.type == 'achievement') {
        update += '<span class="achivementname"> ' + obj.achievement_name + ' </span>';
        update += '<span class="update-text"> badge </span>';
      } else {
        // non-achievement updates have stores associated with them
        update += '<span class="storename"> ' + obj.store_name + ' </span>';
      }

      if (obj.type == 'rating') {
        ratingtypes = ['quality', 'service', 'ambiance'];
        for (var i=0; i < ratingtypes.length; i++) {
          update += '<span class="rating-'+ratingtypes[i]+' score-'+obj[ratingtypes[i]]+'" />';
        }
      }

      if (obj.body) {
        update += '<span class="body">'+obj.body+'</span>';
      }
      update += '<span class="when"> ' + obj.when + '</span>';
      update += '</div>';
      updates.push(update);
    });

    $('<div/>', {
      'class': 'my-new-list',
      html: updates.join('')
    }).appendTo('#feedlist');

  });
});

$('#find').live('pageinit', function(event) {
  fixLinks();
  $('#discoverSearch').click(function(eventObj) {
    performSearch($('#searchbox').val());
    eventObj.preventDefault();
  });

  performSearch('');
});

function performSearch(filter) {
  $.getJSON('search.php?query=' + filter, function(data) {
    var results = [];
    results.push('<ul class="nav nav-tabs nav-stacked activity-list">');

    var mapPoints = [];

    $.each(data.locations, function(idx, obj) {
      console.log(obj);
      mapPoints.push([obj.name, obj.lat, obj.lng, idx+1]);
      result = '\
                                <li><a href="#shop-alturacoffee">\
                                    <i class="icon-chevron-right"></i>\
                                        <div class="media">\
                                            <i class="icon-map-marker media-object pull-left"></i>\
                                            <div class="media-body">\
                                            <h4 class="media-heading">'+ obj.name +'</h4><br />';

      /** mockup so that first and second results have tags **/
      if (idx <= 1) {
        result += '<span class="label label-success">Fair Trade</span> ';
      }
      if (idx < 1) {
        result += '<span class="label label-success">Single Origin</span> ';
      }
      /** end mockup **/

      if (obj.hasOwnProperty('address')) {
        result += '                         <div class="media"><span>'+obj.address+'</span>';
      }
      result += '                           <span>'+obj.distance+'</span></div>\
                                        </div>\
                                    </div>\
                                </a></li>';
      results.push(result);
    });
    results.push('</ul>');

    updateMap(data.center.lat, data.center.lng, mapPoints);


    displayResultList(results.join(''));
  });
}

function displayResultList(elems) {
  $('#nearby').children().remove()
  $('<div/>', {
    'class': 'my-new-list',
    html: elems
  }).appendTo('#nearby');
}

function updateMap (centerLat, centerLng, locations) {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: new google.maps.LatLng(centerLat, centerLng),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    blueIcon = "img/blue_MarkerX.png";

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

    // add a blue icon at the user's current location
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(centerLat, centerLng),
      icon: blueIcon,
      map: map
    });
}

function fixLinks() {
  $("a").click(function (event) {
    event.preventDefault();
    window.location = $(this).attr("href");
  });
}

$('#one').live('pageinit', function(event) {
  fixLinks();
});
