
function openNav()
{
  document.getElementById("navv").style.width="250px";
}
function closeNav()
{
  document.getElementById("navv").style.width="0px";
}
  function openm()
  {
   var x=document.getElementById("menu");
    if(x.style.height==="285px")
    {
    document.getElementById("gob").style.marginTop = "0px";
     x.style.height="0px";
    }
    else
    {
      document.getElementById("gob").style.marginTop = "285px";
      document.getElementById("gob").style.transition = "0.5s";
      x.style.height="285px"; 
    }
  }
 
  function idd()
        {
          document.getElementById("dev").style.display="block";
        }

        function closess()
        {
          document.getElementById("dev").style.display="none";
        }
