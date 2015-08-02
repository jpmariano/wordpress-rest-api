<script type="text/javascript" >
$('document').ready(function() {
	$.ajax({
	    url: 'http://localhost/wordpress/?json=moviereview/get_moviereviews',
	    dataType: 'json',
	    jsonpCallback: 'moviereviewCallback',
	    type: 'get',
	    cache: false,
	    success: function (data) {
	         $(data.movie_reviews).each(function(index, value){
				var outputTitle = '';
				outputTitle += '<li id="movie-review-title" data-role="collapsible" data-iconpos="right" data-shadow="false" data-corners="false"><h2>' + value.title + 
					'</h2><ul data-role="listview" data-shadow="false" data-inset="true" data-corners="false"><li id="movie-review-id"> Post ID: ' + value.id + '</li></ul></li>';
				$('#entries').append(outputTitle);
		
	      });
		}    
	});
	
});

</script>
<style>
	/* Basic settings */
.ui-li-static.ui-collapsible {
    padding: 0;
}
.ui-li-static.ui-collapsible > .ui-collapsible-content > .ui-listview,
.ui-li-static.ui-collapsible > .ui-collapsible-heading {
    margin: 0;
}
.ui-li-static.ui-collapsible > .ui-collapsible-content {
    padding-top: 0;
    padding-bottom: 0;
    padding-right: 0;
    border-bottom-width: 0;
}
/* collapse vertical borders */
.ui-li-static.ui-collapsible > .ui-collapsible-content > .ui-listview > li.ui-last-child,
.ui-li-static.ui-collapsible.ui-collapsible-collapsed > .ui-collapsible-heading > a.ui-btn {
    border-bottom-width: 0;
}
.ui-li-static.ui-collapsible > .ui-collapsible-content > .ui-listview > li.ui-first-child,
.ui-li-static.ui-collapsible > .ui-collapsible-content > .ui-listview > li.ui-first-child > a.ui-btn,
.ui-li-static.ui-collapsible > .ui-collapsible-heading > a.ui-btn {
    border-top-width: 0;
}
/* Remove right borders */
.ui-li-static.ui-collapsible > .ui-collapsible-heading > a.ui-btn,
.ui-li-static.ui-collapsible > .ui-collapsible-content > .ui-listview > .ui-li-static,
.ui-li-static.ui-collapsible > .ui-collapsible-content > .ui-listview > li > a.ui-btn,
.ui-li-static.ui-collapsible > .ui-collapsible-content {
    border-right-width: 0;
}
/* Remove left borders */
/* Here, we need class ui-listview-outer to identify the outermost listview */
.ui-listview-outer > .ui-li-static.ui-collapsible .ui-li-static.ui-collapsible.ui-collapsible,
.ui-listview-outer > .ui-li-static.ui-collapsible > .ui-collapsible-heading > a.ui-btn,
.ui-li-static.ui-collapsible > .ui-collapsible-content {
    border-left-width: 0;
}
</style>


</body>
</html>