function loadFooter() {
    fetch('foot0.html')
        .then(response => response.text())
        .then(data => {
            // Inject the footer into the placeholder
            const placeholder = document.getElementById('footer-placeholder');
            if (placeholder) {
                placeholder.innerHTML = data;

                // Update the timestamp for the CURRENT page
                const lastModElement = document.getElementById('last-mod');
                if (lastModElement) {
                    lastModElement.innerHTML = "Last modified: " + document.lastModified;
                }
            }
        });
}

// Run the function when the page loads
window.onload = loadFooter;