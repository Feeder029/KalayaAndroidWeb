function logToServer(type, message) {
    fetch("/src/api/log-client.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            type: type,
            message: message,
            page: window.location.pathname
        })
    }).catch(() => {
        // silent fail
    });
}
