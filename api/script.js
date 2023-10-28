function fetchData(url, containerId) {
    fetch(url)
        .then((response) => response.json())
        .then((data) => {
            const container = document.getElementById(containerId);
            // Create a table element and a table body
            const table = document.createElement('table');
            const tbody = document.createElement('tbody');

            // Create table header row
            const headerRow = document.createElement('tr');
            headerRow.innerHTML = '<th>ID</th><th>Name</th>';
            tbody.appendChild(headerRow);

            // Iterate through the array of objects and create table rows for each object
            data.forEach((item) => {
                const row = document.createElement('tr');
                row.innerHTML = `<td>${'item.id'}</td><td>${item.name}</td>`;
                tbody.appendChild(row);
            });

            // Append the table body to the table and the table to the container
            table.appendChild(tbody);
            container.appendChild(table);
        })
        .catch((error) => console.error(error));
}

// Fetch user data from the API and render it in a table in the 'user-list' div
fetchData('https://localhost/js-test/api/index.php/users-db', 'user-list');

    // Fetch place data from the API and display it
fetchData('https://localhost/js-test/api/index.php/places', 'place-list');

const testbtn = document.getElementById("btn");

testbtn.addEventListener('click',function(){
    alert('hello')
})

function dem(){
    alert('help');
}
    