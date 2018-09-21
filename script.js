function validate() {
      var x = document.forms["myform"]["Name"].value;
      var y = document.forms["myform"]["Password"].value;
      if(x=="")
      {
        alert("Empty Field");
        return false;
      }
      else if(y=="")
      {
         alert("Empty Field");
        return false;
      }
      else if(x==""&&y=="")
      {
           alert("Empty Field");
             return false;
      }
    }