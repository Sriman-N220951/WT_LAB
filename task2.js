
const username = "sriman";
let userrole = "full stack java developer";
let experience = 7;

console.log("Name:", username);
console.log("Role:", userrole);
console.log("Experience:", experience);

document.getElementById("n").innerText = username;
document.getElementById("role").innerText = userrole;
document.getElementById("experience").innerText = experience;




function welcomemsg() {
  document.getElementById("welcome").innerText = "Sigma male Sriman 😎";
  console.log("Welcome message shown");
}
welcomemsg();


const updateRole = function (newRole) {
  userrole = newRole;
  document.getElementById("role").innerText = userrole;
};


const addExperience = () => {
  experience++;
  document.getElementById("experience").innerText = experience;
};


function experienceInMonths() {
  return experience * 12;
}
console.log("Experience in months:", experienceInMonths());




let userProfile = {
  name: "Srimannarayana",
  age: 21,
  role: "Web Developer",

 
  updateRole: function () {
    this.role = "Java Full Stack Developer"; // using this
    document.getElementById("role").innerText = this.role;
    console.log("Updated Object:", this);
  }
};

console.log("User Profile Object:", userProfile);


document.getElementById("n").innerText = userProfile.name;

document.getElementById("experience").innerText = userProfile["age"];
document.getElementById("role").innerText = userProfile.role;


function showAlert() {
  alert("Jai Narasimha 🔥");
}
showAlert();

function confirmUpdate() {
  let choice = confirm("Do you want to update profile role?");
  if (choice) {
    userProfile.updateRole();
  }
}
confirmUpdate();

function askName() {
  let input = prompt("Enter your name:");
  if (input) {
    document.getElementById("promptResult").innerText =
      "Hello " + input;
  }
  askName();
}
