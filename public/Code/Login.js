const Users=[
    {name:"John", password:"1234"},
    {name:"Mary", password:"5678"},
    {name:"Peter", password:"1234"}
]

document.getElementById("LoginForm").onsubmit = function(event) {
    event.preventDefault();
    const name = document.getElementById("userName").value;
    const password = document.getElementById("password").value;


    if(name==""){
        message = "Please enter your name";
    }
    else if(password==""){
        message = "Please enter your password";
    }
    else{
        if(Users.some(user => user.name === name && user.password === password)){
            message = "Welcome " + name;
        }
        else{
            message = "Invalid username or password";
        }
    }
    document.getElementById("Message").textContent = message;
};