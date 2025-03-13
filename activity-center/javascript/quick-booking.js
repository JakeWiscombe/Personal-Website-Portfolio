function populateTimeOptions() {
    const select = document.getElementById('time');
    select.innerHTML = ''; // Clear existing options

    for (let hour = 0; hour < 24; hour++) {
        for (let minute = 0; minute < 60; minute += 15) {
            const option = document.createElement('option');
            const formattedHour = hour.toString().padStart(2, '0');
            const formattedMinute = minute.toString().padStart(2, '0');
            option.value = `${formattedHour}:${formattedMinute}`;
            option.textContent = `${formattedHour}:${formattedMinute}`;
            select.appendChild(option);
        }
    }
}

// Populate the time options when the page loads
window.onload = populateTimeOptions;