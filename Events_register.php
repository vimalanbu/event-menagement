<html>
<head>
    <title>EVENTS RESGISTER</title>
    <link rel="stylesheet" href="CSS_File/ERF.css">
</head>
<body>
<div class="container">
    <form action="connect.php" method="post">
    <h3>EVENTS RESERVATION FORM</h3>
    <div class="tb">
    <table>
        <tr>
            <td>
                <label for="fname">First Name</label>
            </td>
            <td>
                <input type="text" id="fname" name="fname">
            </td>
        </tr>
        <tr>
            <td>
                <label for="lname">Last Name</label>
            </td>
            <td>
                <input type="text" id="lname" name="lname">
            </td>
        </tr>
        <tr>
            <td>
                <label for="number">Phone Number</label>
            </td>
            <td>
                <input type="number" id="number" name="phone_number">
            </td>
        </tr>
        <tr>
            <td>
                <label for="number">Alternative Number</label>
            </td>
            <td>
                <input type="number" id="number" name="Alt_phone_number">
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">Email Id</label>
            </td>
            <td>
                <input type="email" id="email" name="email">
            </td>
        </tr>
        <tr>
            <td>
                <label for="date">Reservation Date</label>
            </td>
            <td>
                <input type="text" id="date" name="date">
            </td>
        </tr>
        <tr>
            <td> 
                <label for = "Event_venues">Types Of venues</label>
            </td>
            <td>
                <select name="Event_venues" id="Event_venues">
                    <option value="Tilib Leisure Club">Tilib Leisure Club</option>
                    <option value="Vg Mahal">Vg Mahal</option>
                    <option value="Sri Vasavi Kalyana Mahal">Sri Vasavi Kalyana Mahal</option>
                    <option value="Sri Muthaiah Mahal">Sri Muthaiah Mahal</option>
                </select>
             </td>
        </tr>
        <tr>
            <td> 
                <label for = "Type_Of_Price">Types Of Price</label>
            </td>
            <td>
                <select name="Type_Of_Price" id="Type_Of_Price">
                    <option value="Basic"> Basic types</option>
                    <option value="prime">Prime type</option>
                    <option value="luxury">Luxury type</option>
                    <option value="ultra">Ultra type</option>
                </select>
             </td>
        </tr>


        <tr>
            <td>
                <label for="city">City</label>
            </td>
            <td>
                <input type="text" id="city" name="city">
            </td>
        </tr>
        <tr>
            <td>
                <label for="street">Street</label>
            </td>
            <td>
                <input type="text" id="street" name="street">
            </td>
        </tr>
        <tr>
            <td>
                <label for="pincode">Pincode</label>
            </td>
            <td>
                <input type="number" id="pincode" name="pincode">
            </td>
        </tr>
        <tr>
            <td>
                <label for="Address">Address</label>
            </td>
            <td>
            <textarea id="Address" name="Address" rows="5" cols="52"></textarea>
            </td>
        </tr>
    </table>
    <div class="btn">
    <input type="submit" value="Submit">
    </div>
    </div>
    </form>
</div>    
</body>
</html>