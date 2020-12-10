/*function toggle()
{
var toggle = document.getElementById('links').style.display = "flex";
var ham = document.getElementById('bars').style.display = "none";
var x = document.getElementById('x').style.display = "block";


}
function toggleOff()
{
var toggle = document.getElementById('links').style.display = "none";
var ham = document.getElementById('bars').style.display = "block";
var x = document.getElementById('x').style.display = "none";


}

const selectElement = (element) => document.querySelector(element);
selectElement('.menu-icons').addEventListener('click',() => {
    selectElement('nav').classList.toggle('active');
})
*/
window.onload = function()
{
const selectElement = (element) => document.querySelector(element);

selectElement ('.menu-icons').addEventListener('click',() => {
    selectElement('nav').classList.toggle('active');
});

};
