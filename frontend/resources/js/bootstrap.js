import Echo from 'laravel-echo';
import Reverb from 'reverb-js';

// Attach Reverb to the window object to make it accessible globally
window.Reverb = Reverb;

// Create a new Echo instance, configuring it for Reverb
window.Echo = new Echo({
    broadcaster: 'reverb',  // Use reverb as the broadcaster
    key: import.meta.env.VITE_REVERB_APP_KEY,  // Get Reverb App Key from .env
    wsHost: import.meta.env.VITE_REVERB_HOST,  // WebSocket Host from .env
    wsPort: import.meta.env.VITE_REVERB_PORT,  // WebSocket Port from .env
    wssPort: import.meta.env.VITE_REVERB_PORT,  // WebSocket SSL Port from .env
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',  // Use TLS/SSL if the scheme is https
    enabledTransports: ['ws', 'wss'],  // Enable WebSocket transport
});
