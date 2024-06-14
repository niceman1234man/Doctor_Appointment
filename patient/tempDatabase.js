/*function fetchData() {
    fetch('tempDatabase.php')
      .then(function(response) {
        return response.json();
      })
      .then(function(data) {
        // Access the data using index
        console.log('Access by index:');
        console.log(data[0]); // Access the first object in the array
        console.log(data[1].fname, data[1].lname); // Access properties of the second object
  
        // Access the data using key/value
        console.log('Access by key/value:');
        data.forEach(function(item) {
          console.log(item.id, item.fname, item.lname);
        });
      })
      .catch(function(error) {
        console.error('Error:', error);
      });
  }
  
  // Call the */