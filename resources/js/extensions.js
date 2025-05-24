export default function initExtensionToggles() {
    document.querySelectorAll('.js-toggle-ext').forEach(toggle => {
        toggle.addEventListener('change', () => {
            const id = toggle.dataset.id;
            const isChecked = toggle.checked ? true : false;
            const previousState = !isChecked;

            fetch(`/extensions/${id}`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    'isActive': isChecked
                })
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (!data.success) {
                        toggle.checked = previousState;
                    }
                })
                .catch(error => {
                    console.error('Error: ', error.message);
                    alert('Something went wrong. Please try again.');
                });
        });
    });
}