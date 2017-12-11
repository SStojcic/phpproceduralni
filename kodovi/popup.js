$(document).ready(function ()
   {
      $("#btnShowSimple").click(function (e)
      {
         ShowDialog(false);
         e.preventDefault();
      });
 $("#btnShowSimple1").click(function (e)
      {
         ShowDialog1(false);
         e.preventDefault();
      });
   

      $("#btnClose").click(function (e)
      {
         HideDialog();
         e.preventDefault();
      });

     $("#btnClose1").click(function (e)
      {
         HideDialog1();
         e.preventDefault();
      });

   });

   function ShowDialog(modal)
   {
      $("#overlay").show();
      $("#dialog").fadeIn(300);

      if (modal)
      {
         $("#overlay").unbind("click");
      }
      else
      {
         $("#overlay").click(function (e)
         {
            HideDialog();
         });
      }
   }

   function HideDialog()
   {
      $("#overlay").hide();
      $("#dialog").fadeOut(300);
   } 


   function ShowDialog1(modal)
   {
      $("#overlay1").show();
      $("#dialog1").fadeIn(300);

      if (modal)
      {
         $("#overlay1").unbind("click");
      }
      else
      {
         $("#overlay1").click(function (e)
         {
            HideDialog();
         });
      }
   }

   function HideDialog1()
   {
      $("#overlay1").hide();
      $("#dialog1").fadeOut(300);
   } 
