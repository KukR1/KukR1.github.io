var gtmEventsData = {
    visitCubio: {
        'event': 'Cube Challenges Visited',
    },
    getAQuoteClick: {
        'event': 'Get A Quote Clicked'
    },
    getAQuoteFooterClick: {
        'event': 'Get A Quote Footer Clicked'
    },
    getAQuoteSubmit: {
        'event': 'Contact Form Submitted'
    },
}

$('#get_quote p').on('click', function() {
   gtmDataLayer.push(gtmEventsData.getAQuoteClick);
});
$('#get_a_quote_footer').on('click', function() {
    gtmDataLayer.push(gtmEventsData.getAQuoteFooterClick);
 });
$('#cube_banner').on('click', function() {
   gtmDataLayer.push(gtmEventsData.visitCubio);
});
