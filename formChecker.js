

let m_username = document.getElementById('username');
let m_password = document.getElementById('password');

let m_freeShipping = document.getElementById("free");
let m_fastShipping = document.getElementById('fast');
let m_normalShipping = document.getElementById('normal');

let m_submitButton = document.getElementById("submitForm");
let m_apples = document.getElementById('apples');
let m_bread = document.getElementById('bread');
let m_potatoes = document.getElementById('potatoes');
let m_eggs = document.getElementById('eggs');

let m_qApples = document.getElementById('quantity1');
let m_qBread = document.getElementById('quantity2');
let m_qPotatoes = document.getElementById('quantity3');
let m_qEggs = document.getElementById('quantity4');




//WILL ONLY SUBMIT IF username is valid, password is filled, and shipping method is requested
m_submitButton.onsubmit = function submitSequence(){
    console.log("username: " + m_username.value);
    console.log("password: " + m_password.value);
    if(m_apples.checked)
    {
        console.log(m_qApples.value + " pounds of Apples selected.");
    }
    if(m_bread.checked)
    {
        console.log(m_qBread.value + " loaves of Bread selected.");
    }
    if(m_potatoes.checked)
    {
        console.log(m_qPotatoes.value + " pounds of Potatoes selected.");
    }
    if(m_eggs.checked)
    {
        console.log(m_qEggs.value + " dozens of Eggs selected.");
    }
    else
    {
        console.log("Nothing was ordered.");
    }
    //Checks username, password, and shipping address
    if(m_username.value == "" || m_password.value == "" || (m_freeShipping.checked == false && m_fastShipping.checked == false && m_normalShipping.checked == false))
    {
        return false;
    }
    else
    {
        if(m_username.value.indexOf('@domain.com') <= -1 || m_username.value.indexOf("@", 0) == 0)//This is how we determine if it is in e-mail form
        {
            alert("Username needs to be in e-mail form. (example@domain.com)");
            return false;
        }
        else
        {
            return true;
        }
    }
}

