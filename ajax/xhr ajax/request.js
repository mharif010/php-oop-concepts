const getButton = document.getElementById("get-button");
const sendButton = document.getElementById("send-button");

const sendRequest = function(method, url, data){
    const promise = new Promise((resolve, reject) => {
      const xhr = new XMLHttpRequest();
        xhr.open(method, url, true);
        xhr.responseType = "json";
        xhr.setRequestHeader("Content-Type", "application/json"); 
        // xhr.onreadystatechange = function() {
        //     if (xhr.readyState === 4) {
        //       var response = JSON.parse(xhr.responseText);
        //         if (xhr.status === 200) {
        //            console.log(this.responseText);
        //         } else {
        //            console.log('failed');
        //         }
        //     }
        //   }
        xhr.send(data);

        xhr.onload = function (){
          if( xhr.status >= 400 ){
              reject(xhr.response);
          }else{
            resolve(xhr.response);
          }
        };
        xhr.onerror = function(){
          reject("Something was error!");
        }
    });
    return promise;
}

const getData = function (){
    sendRequest("GET", "https://jsonplaceholder.typicode.com/todos/1").then(responseData =>{
        console.log(responseData);
    });
}
const sendData = function(){
  sendRequest("POST", "https://jsonplaceholder.typicode.com/posts", JSON.stringify({
    title: 'foods',
    body: 'bar',
    userId: 1,
  })).then(responseData =>{
        console.log(responseData);
    }).catch(err => {
      console.log(err);
    });
}

getButton.addEventListener('click', getData);
sendButton.addEventListener('click', sendData);

