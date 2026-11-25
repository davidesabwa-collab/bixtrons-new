$("#timeline-forward").click(function() {
if (($("section:last-of-type").attr("id")) != ("event-0")) {

 $( ".event" ).each(function( i ) {
 var eventIndex = $( "section" ).index( this );
 var eventChange = eventIndex - 1;

 if (eventChange < 0) {
 	eventChange = "prev"+ eventChange; 
	$('#event-'+ eventIndex).addClass("prev").removeClass("cur");
	
 }
  
 $('#event-'+ eventIndex).attr("id", "event-" + eventChange);
 
});

$( '.event[id*="prev"]' ).each(function( i ) {
var prevIndex = $( '.event[id*="prev"]' ).index( this );
 var prevChange = prevIndex + 1;

 $('#event-prev-'+ prevIndex).attr("id", "event-prev-" + prevChange);
});
}
});




$("#timeline-back").click(function() {
if (($("section:first-of-type").attr("id")) != ("event-0")) {

$( '.cur').each(function() {
 var eventBackIndex = this.id;
 var eventBack = Number(eventBackIndex.replace("event-", ""));
 var eventBackChange = (eventBack + 1);

 $(this).attr("id", "event-" + eventBackChange);
});

 $( '.prev' ).each(function( i ) {
 var prevBackIndex = $(this).attr("id");
 var prevBack = Number(prevBackIndex.replace("event-prev-", ""));
 var prevBackChange = prevBack - 1;

if (prevBackChange > 0) {
 prevBackChange = "prev-"+ prevBackChange; 
 }
 
 if (prevBackChange == 0) {
 $(this).addClass("cur").removeClass("prev");

 }

$(this).attr("id", "event-" + prevBackChange);
 
 prevBackChange = "";

});

}
});


$(document).keydown(function(event) {
switch (event.keyCode) {

case 38:
 if (($("section:last-of-type").attr("id")) != ("event-0")) {

 $( ".event" ).each(function( i ) {

 var eventIndex = $( "section" ).index( this );
 var eventChange = eventIndex - 1;

 if (eventChange < 0) {
 	eventChange = "prev"+ eventChange; 
	$('#event-'+ eventIndex).addClass("prev").removeClass("cur");
	
 }
  
 $('#event-'+ eventIndex).attr("id", "event-" + eventChange);
 
});

$( '.event[id*="prev"]' ).each(function( i ) {
var prevIndex = $( '.event[id*="prev"]' ).index( this );
 var prevChange = prevIndex + 1;

 $('#event-prev-'+ prevIndex).attr("id", "event-prev-" + prevChange);
 
});
}
break;


case 40:
if (($("section:first-of-type").attr("id")) != ("event-0")) {

 $( '.cur').each(function() {
 var eventBackIndex = this.id;
 var eventBack = Number(eventBackIndex.replace("event-", ""));
 var eventBackChange = (eventBack + 1);

 $(this).attr("id", "event-" + eventBackChange);
 

});


 $( '.prev' ).each(function( i ) {
 var prevBackIndex = $(this).attr("id");
 var prevBack = Number(prevBackIndex.replace("event-prev-", ""));
 var prevBackChange = prevBack - 1;

if (prevBackChange > 0) {
 prevBackChange = "prev-"+ prevBackChange; 
 }
 
 if (prevBackChange == 0) {
 $(this).addClass("cur").removeClass("prev");

 }

$(this).attr("id", "event-" + prevBackChange);
 
 prevBackChange = "";

});
}
break;
}

});

var ar=new Array(37,38,39,40);

$(document).keydown(function(e) {
     var key = e.which;
    
      if($.inArray(key,ar) > -1) {
          e.preventDefault();
          return false;
      }
      return true;
});