const MONTHNAME = [
    "January", 
    "February", 
    "March", 
    "April", 
    "May", 
    "June", 
    "July", 
    "August", 
    "September", 
    "October", 
    "November", 
    "December", 
]
DispalyDateBudget()

function DispalyDateBudget() {
    const currentDate = new Date();
    document.getElementById("time").innerHTML = "BUDGET AVAILABLE IN  " 
    + MONTHNAME[currentDate.getMonth()] +" "+ currentDate.getFullYear() + ""
}