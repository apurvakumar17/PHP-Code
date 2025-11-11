<!DOCTYPE html>
<html>
<head>
  <title>Project Details Fetcher</title>
  <script>
    function getProjectDetails() {
      const projectId = document.getElementById("projectId").value.trim();
      if (projectId === "") {
        document.getElementById("result").innerHTML = "Please enter a Project ID.";
        return;
      }

      const xhr = new XMLHttpRequest();
      xhr.open("POST", "practical_16b.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onload = function() {
        if (xhr.status === 200) {
          document.getElementById("result").innerHTML = xhr.responseText;
        } else {
          document.getElementById("result").innerHTML = "Error fetching data.";
        }
      };

      xhr.send("id=" + encodeURIComponent(projectId));
    }
  </script>
</head>
<body style="font-family: Arial; padding: 20px;">
  <h2>Fetch Project Details</h2>

  <label for="projectId"><b>Enter Project ID:</b></label><br>
  <input type="text" id="projectId" placeholder="e.g., P101">
  <button onclick="getProjectDetails()">Get Details</button>

  <hr>
  <div id="result" style="margin-top:15px; font-size:1rem; color:#333;"></div>

  <p style="font-size:0.9rem; color:#555;">Apurva Kumar, 04814902024</p>
</body>
</html>