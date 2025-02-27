<div>
    <!-- <h2>Process Monitor</h2> -->
    <pre id="process-data">{{ $processData }}</pre>

    <script>
        window.Echo.channel('process-data')
            .listen('.ProcessDataUpdated', (event) => {
                console.log("New process data received:", event.processData);
                document.getElementById("process-data").innerText = event.processData;
            });
    </script>
</div>
