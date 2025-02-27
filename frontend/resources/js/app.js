window.Echo.channel('process')
    .listen('ProcessUpdated', (event) => {
        console.log(event.processData); 
    });
