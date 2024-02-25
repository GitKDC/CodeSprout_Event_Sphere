<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Event Form</title>
  <link rel="stylesheet" href="createevent.css"><link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Honk&family=Nabla&family=Oswald:wght@200..700&display=swap" rel="stylesheet">


</head>
<body>
  <div class="main">
    <img src="./bgimg.jpg" alt="">
    <div class="imp">
  <div style="background-color: rgb(217, 195, 139); margin-top: 0vw;" class="container">
    <h2 id="title">Create Event Form</h2>  
    <form action="addevent.php" method="post">
      <fieldset style="font-weight: bolder;">
        <legend>Event Details:</legend>
        <label for="eventName">Event Name:</label>
        <input type="text" id="eventName" name="eventName" required>

        <label for="dateTime">Date & Time:</label>
        <input type="datetime-local" id="dateTime" name="dateTime" required>

        <label for="venue">Venue:</label>
        <select id="venue" name="Venue" required>
          <option value="blank"></option>
          <option value="Seminar Hall(Main Building)">Seminar Hall(Main Building)</option>
          <option value="Seminar Hall(Management Building)">Seminar Hall(Main Building)</option>
          <option value="Ampitheatre">Ampitheatre</option>
          <option value="Badminton Court">Badminton Court</option>
          <option value="Main Ground">Main Ground</option>
        </select>

        <label for="attendance">Estimated Attendance:</label>
        <input type="text" id="attendance" name="attendance" required>
      </fieldset>
<br>
      <fieldset style="font-weight: bolder;">
        <legend>Organizer Information:</legend>
        <label for="organizerName">Committee/Club Name:</label>        
        <select id="clubCommittee" name="clubCommittee">
          <option value="blank"></option>
          <option value="ecell">E-Cell</option>
          <option value="codersclub">Coders Club</option>
          <option value="studentsCouncil">Students Council</option>
          <option value="sportsCommittee">Sports Committee</option>
          <option value="toastmasterClub">Toastmasters Club</option>
        </select>

        <label for="contactPerson">Contact Person:</label>
        <input type="text" id="contactPerson" name="contactPerson">

        <label for="contactEmail">Contact Email:</label>
        <input type="email" id="contactEmail" name="contactEmail">

        <label for="contactPhone">Contact Phone:</label>
        <input type="text" id="contactPhone" name="contactPhone">
      </fieldset>
<br>
      <fieldset style="font-weight: bolder;">
        <legend>Event Overview:</legend>
        <textarea id="eventOverview" name="eventOverview" rows="4" maxlength="300" required></textarea>
      </fieldset>
<br>
      <fieldset style="font-weight: bolder;">
        <legend>Budget & Resources:</legend>
        <label for="estimatedBudget">Estimated Budget:</label>
        <input type="text" id="estimatedBudget" name="estimatedBudget" required>

        <label for="fundingSources">Funding Sources:</label>
        <input type="text" id="fundingSources" name="fundingSources" required>

        <label for="resourceRequirements">Resource Requirements:</label>
        <textarea id="resourceRequirements" name="resourceRequirements" rows="4" maxlength="300" required></textarea>
      </fieldset>
<br>
      <fieldset style="font-weight: bolder;">
        <legend>Marketing Strategy:</legend>
        <label for="targetAudience">Target Audience:</label>
        <input type="text" id="targetAudience" name="targetAudience" required>

        <label for="promotionPlan">Promotion Plan:</label>
        <textarea id="promotionPlan" name="promotionPlan" rows="4" maxlength="300" required></textarea>
      </fieldset>
<br>
      <fieldset style="font-weight: bolder;">
        <legend>Approval Workflow:</legend>
        <label for="approvers">Select Approvers:</label>
        <select id="approvers" name="approvers" multiple required>
          <option value="hod">HOD Approval</option>
          <option value="dean">Dean Approval</option>
          <option value="director">Director Approval</option>
        </select>
      </fieldset>
<br>
      <fieldset style="font-weight: bolder;">
        <legend>Attachments:</legend>
        <input type="file" id="attachments" name="attachments">
      </fieldset>

      <button type="submit">Submit Event Proposal</button>
      <p style="font-weight: bold;">Await Approval Status.</p>
    </form>
  </div>
</div>
</div>
</body>
</html>
