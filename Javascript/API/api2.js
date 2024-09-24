// Specify the API endpoint for user data
const apiUrl = 'https://jsonplaceholder.typicode.com/posts?userId=1';

/*
// Make a GET request using the Fetch API
fetch(apiUrl)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(userData => {
    // Process the retrieved user data
    console.log('User Data:', userData);
  })
  .catch(error => {
    console.error('Error:', error);
  });
*/
  async function buscarID(){
      const respose =  await fetch(apiUrl);
      //console.log(respose)
      const  data = await respose.json();
      console.log(data);
  }

  buscarID();