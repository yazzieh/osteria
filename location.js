// Hard-coded values for JSON object
const loc = [
    {"State":"Washington","City":["Seattle","Tacoma","Bremerton"]},
    {"State":"Texas","City":["Dallas","Houston","Austin"]},
    {"State":"California","City":["Sacramento","Oakland","Baker"]}];


function locations()
{
//Build out markup for droplist
    $("#container").html("<form id='thisform'><select id='selection'><option value='none'>-Select a state-</option>");
//Add the states' names
    for(var i=0; i<3; i++)
    {
        $("option").add("<option value='" + loc[i].State + "'>" + loc[i].State + "</option>").appendTo("#selection");
    }
// Close form
  /*For some reason I can't get this to work right using Jquery - the middle object is selected for no apparent reason. I tried:
  $("#selection).add("</select></form>").appendTo("#container")
  
  and variations around this
  */
    document.getElementById("container").innerHTML += "</select></form>";
// Make containers for the 3 lists of cities
    for(var i=0; i<3; i++)
    {
        $("#container").add("<div id='" + loc[i].State + "'><p>We have stores in:</p><ul><li>" + loc[i].City[0] +  "</li><li>" + loc[i].City[1] + "</li><li>" + loc[i].City[2] + "</li></ul></div>").appendTo("#container");
    }
// Hide the containers
    $("div").hide();
 }
// When selection changes, show the corresponding div and hide the others
 $(document).ready(function() {
    $("select").on('change', function() {
 $(this).find("option:selected").each(function() {
            var picked = $(this).attr("value");
            if (picked) {
                $("div").not("#" + picked).hide();
                $("#" + picked).show();
            } else {
                $("div").hide();
            }
        });
    }).change();
});
