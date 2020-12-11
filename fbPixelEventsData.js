var fbPixelEventsData = {
    visitCubio: {
        trackEvent: 'track',
        // eventName: 'ViewContent',
        eventName: 'Cube_Challenges_Visited',
        params: {
            content_name: 'Cube Challenges'
        }
    },
    getAQuoteClick: {
        trackEvent: 'trackCustom',
        eventName: 'Get_Quote_Clicked',
        params: {}
    },
    getAQuoteFooterClick: {
        trackEvent: 'trackCustom',
        eventName: 'Get_Quote_Footer_Clicked',
        params: {}
    },
    getAQuoteSubmit: {
        trackEvent: 'trackCustom',
        eventName: 'ContactFormSubmitted',
        params: {}
    }
}

$('#get_quote').on('click', function() {
   const {trackEvent, eventName, params} = fbPixelEventsData.getAQuoteClick;
   fbq(trackEvent, eventName, params);
});
$('#get_a_quote_footer').on('click', function() {
    const {trackEvent, eventName, params} = fbPixelEventsData.visitCubio;
    fbq(trackEvent, eventName, params);
 });
$('#cube_banner').on('click', function() {
    const {trackEvent, eventName, params} = fbPixelEventsData.getAQuoteFooterClick;
    fbq(trackEvent, eventName, params);
});
