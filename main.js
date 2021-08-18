
function overlay()
{
	var over=document.getElementsByClassName("opts");
	for(i=0;i<=5;i++){
over[i].style.color="white";
over[i].style.fontSize="35px";

over[i].style.textShadow="2px 2px 4px black";
over[i].style.backgroundColor="rgba(255,255,255,0.3)";
over[i].style.fontWeight="bold";

}
}

function overlay_back()
{
	var over=document.getElementsByClassName("opts");
	for(i=0;i<=5;i++){
	over[i].style.color="black";
	over[i].style.fontSize="30px";
over[i].style.textShadow="2px 2px 4px white";

over[i].style.backgroundColor="gray";
}}