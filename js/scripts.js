
function validate_email(field,alerttxt)
{
with (field)
{
apos=value.indexOf("@");
dotpos=value.lastIndexOf(".");
if (apos<1||dotpos-apos<2) 
  {alert(alerttxt);return false;}
else {return true;}
}
}

function validate_required(field,alerttxt)
{
with (field)
{
if (value==null||value=="" || value=="0" || value==" ")
  {alert(alerttxt);return false;}
else {return true}
}
}

function validate_form(thisform)
{
with (thisform)
{
if (validate_required(fname,"First name must be filled out!")==false)
  {fname.focus();return false;}
  
if (validate_required(lname,"Last name must be filled out!")==false)
  {lname.focus();return false;}
  
if (validate_email(email,"Not a valid e-mail address!")==false)
  {email.focus();return false;}
  
if (validate_required(phone,"Phone must be filled out!")==false)
  {phone.focus();return false;}
  
if (validate_required(zip,"ZIP must be filled out!")==false)
  {zip.focus();return false;}

if (validate_required(comments,"Comments must be filled out!")==false)
  {comments.focus();return false;}

}
}