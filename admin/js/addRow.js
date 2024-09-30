function addInput() {
    document.getElementById('addButton').addEventListener('click', function(event) {
        // Prevent the default action (which could be form submission)
        event.preventDefault();

        // Get the container element
        var container = document.getElementById('inputContainer');

        // Create a new input element
        var newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.className = 'form-control py-4 mt-2';
        newInput.placeholder = '...';

        // Append the new input element to the container
        container.appendChild(newInput);
    });
}