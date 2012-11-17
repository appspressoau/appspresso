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

    $.each(data, function(idx, obj) {
      console.log(obj);
      result = '\
                                <li><a href="#shop-alturacoffee">\
                                    <i class="icon-chevron-right"></i>\
                                        <div class="media">\
                                            <img class="media-object pull-left" src="http://placehold.it/64x64">\
                                            <div class="media-body">\
                                            <h4 class="media-heading">'+ obj.name +'</h4><br />\
                                            <span class="label label-success">Fair Trade</span>\
                                            <span class="label label-success">Single Origin</span>\
                                            <!-- Nested media object -->\
                                            <div class="media"></div>\
                                        </div>\
                                    </div>\
                                </a></li>';
/*
      result = '<div class="searchresult">';
      result += '<span class="storename"> ' + obj.name + ' </span>';
      result += '<span class="address"> ' + obj.address+ ' </span>';
      result += '<span class="distance"> ' + obj.distance + ' </span>';
      result += '</div>';
*/
      results.push(result);
    });
    results.push('</ul>');

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

function fixLinks() {
  $("a").click(function (event) {
    event.preventDefault();
    window.location = $(this).attr("href");
  });
}

$('#one').live('pageinit', function(event) {
  fixLinks();
});
