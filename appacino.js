$('#feedlist').live('pageinit', function(event) {
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
  $('#discoverSearch').click(function(eventObj) {
    performSearch('');
    eventObj.preventDefault();
  });

  performSearch('');
});

function performSearch(filter) {
  $.getJSON('nearby.json', function(data) {
    var results = [];

    $.each(data, function(idx, obj) {
      console.log(obj);
      result = '<div class="searchresult">';
      result += '<span class="storename"> ' + obj.name + ' </span>';
      result += '<span class="address"> ' + obj.address+ ' </span>';
      result += '<span class="distance"> ' + obj.distance + ' </span>';
      result += '</div>';
      results.push(result);
    });

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
