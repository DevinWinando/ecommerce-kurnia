import Echo from "laravel-echo";
import Pusher from "pusher-js";

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true,
    authEndpoint: `/api/broadcasting/auth`,
    auth: {
        withCredentials: true,
        headers: {
            "X-XSRF-TOKEN": decodeURIComponent(
                document.cookie
                    .split("; ")
                    .find(row => row.startsWith("XSRF-TOKEN="))
                    ?.split("=")[1] || ''
            )
        }
    }
});

