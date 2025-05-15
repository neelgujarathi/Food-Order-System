<html>
    <head>
        
        <title>Food Item Order Form</title>
       
        <link rel="stylesheet" href="assets/css/styleorder.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <body>
        <div class = "container">
            <h1 class = "form-title">Food Item Order Form</h1>
        

        <form action = "#" method="post" name="myform" enctype="multipart/form-data">
            <div class="main-user-info">
            <div class="user-input-box">
                    <label>Name</label>
                    <input type = "text" name = "name"  placeholder="Enter name" value="" required>
                </div>

                <div class="user-input-box">
                    <label>Contact</label>
                    <input type = "text" name = "contact" placeholder="Enter contact" required>
                </div>

                <div class="user-input-box">
                    <label>Email</label>
                    <input type = "text" name = "email"  placeholder="Enter email" required>
                </div>

                <div class="user-input-box">
                    <label>Address</label>
                    <textarea name = "address" cols="33" rows="2" required class="nee">  </textarea>
                </div>

                <div class = "gender-details-box">
                    <span class="gender-title">Food Item Type</span>
                    <div class="gender-category">
                        <input type="radio" name = "fix" id="ps" value="Non-veg" onclick="UpdateList(this.value)" required>
                        <label>Non-Veg</label>
                        <input type="radio" name = "fix" id="os" value="Veg" onclick="UpdateList(this.value)" checked required>
                        <label for="no">Veg</label>
                        <input type="radio" name = "fix" id="is" value="drink" onclick="UpdateList(this.value)" required>
                        <label for="no">Drink</label>
                    </div>
                </div>
                
                <div class="user-input-box">
                    <label>Food Items</label>
                    <select name="optionlist" id="it">
                        <option>Potato Fries with Soup</option>
                        <option>Vegetable Salad</option>
                        <option>Pizza with mozzarella cheese</option>
                        <option>Burn & White Cream</option>
                        <option>Sweet Corn</option>
                        <option>Chocolate Cake</option>
                        <option>Cheese Pizza</option>
                        <option>Club Sandwish with Fries & Cream</option>
                        <option>Fruit Salad</option>
                        <option>Strawberries & Blackberries</option>
                        <option>Cheese Bread</option>
                        <option>White Pan Cake</option>
                        <option>Strwberry Cake</option>
                        <option>Orange Soup</option>
                    </select>
                </div>

                <div class="user-input-box">
                    <label>Item Quantity</label>
                    <input type = "text" name = "quantity"  placeholder="Enter Item Quantity" id="q" required>
                </div>

                <div class="user-input-box">
                    <label>Your Total Bill</label>
                    <input type = "text" name = "wpn"  value="" id="amt">
                </div>
               
            </div>
            <div class = "form-submit-btn">
                <input type ="submit" name = "submit" value = "Place Order" onclick="calculate()"> 
            </div>
         
        </div>
        </form>
    </body>
</html>


<script>
     document.getElementById("amt").readOnly = true;
    function calculate()
    {
       var value = document.getElementById("it").value;
       var qty = document.getElementById("q").value;
       var cal =0;
       if(value=="Potato Fries with Soup")
       {
        cal+=150*qty;
       }
       if(value=="Vegetable Salad")
       {
        cal+=170*qty;
       }
       if(value=="Pizza with mozzarella cheese")
       {
        cal+=250*qty;
       }
       if(value=="Burn & White Cream")
       {
        cal+=265*qty;
       }
       if(value=="Sweet Corn")
       {
        cal+=120*qty;
       }
       if(value=="Chocolate Cake")
       {
        cal+=230*qty;
       }
       if(value=="Cheese Pizza")
       {
        cal+=340*qty;
       }
       if(value=="Club Sandwish with Fries & Cream")
       {
        cal+=430*qty;
       }
       if(value=="Fruit Salad")
       {
        cal+=310*qty;
       }
       if(value=="Strawberries & Blackberries")
       {
        cal+=290*qty;
       }
       if(value=="Cheese Bread")
       {
        cal+=200*qty;
       }
       if(value=="White Pan Cake")
       {
        cal+=300*qty;
       }
       if(value=="Strwberry Cake")
       {
        cal+=256*qty;
       }
       if(value=="Orange Soup")
       {
        cal+=160*qty;
       }
       if(value=="Egg Sandwiche")
       {
        cal+=145*qty;
       }
       if(value=="Grilled Chicken & Sauce")
       {
        cal+=350*qty;
       }
       if(value=="Chicken Biryani")
       {
        cal+=450*qty;
       }
       if(value=="Chicken Cup")
       {
        cal+=190*qty;
       }
       if(value=="Chiken Roll")
       {
        cal+=320*qty;
       }
       if(value=="Chicken Sticks")
       {
        cal+=235*qty;
       }
       if(value=="Egg with sliced tomato")
       {
        cal+=145*qty;
       }
       if(value=="Chicken Rice")
       {
        cal+=230*qty;
       }
       if(value=="Egg Salad")
       {
        cal+=175*qty;
       }
       if(value=="Chicken Pizza")
       {
        cal+=360*qty;
       }
       if(value=="Chicken Sandwish")
       {
        cal+=235*qty;
       }
       if(value=="Chicken Tikki")
       {
        cal+=270*qty;
       }
       if(value=="Chicken Cheese Pizza")
       {
        cal+=340*qty;
       }
       if(value=="Chicken Cheese Pizza With sauce")
       {
        cal+=410*qty;
       }
       if(value=="Mix Fruit Juice")
       {
        cal+=160*qty;
       }
       if(value=="Banana Smoothie")
       {
        cal+=240*qty;
       }
       if(value=="Strawberries & Blackberries")
       {
        cal+=290*qty;
       }
       if(value=="Chocolate Shake")
       {
        cal+=120*qty;
       }
       if(value=="Strawberry shake with Ice-cream")
       {
        cal+=200*qty;
       }
       if(value=="Spirite")
       {
        cal+=90*qty;
       }
       if(value=="Frooti")
       {
        cal+=50*qty;
       }
       if(value=="Apple Smoothie")
       {
        cal+=290*qty;
       }
       if(value=="Orange Juice")
       {
        cal+=160*qty;
       }
       if(value=="Pineapple Shake")
       {
        cal+=230*qty;
       }
       if(value=="Apple & Pineapple Mix Juice")
       {
        cal+=320*qty;
       }
       if(value=="Blackberry Juice")
       {
        cal+=150*qty;
       }
       if(value=="Mix Fruit Shake")
       {
        cal+=300*qty;
       }
       if(value=="Thumbs up")
       {
        cal+=220*qty;
       }
       var input = document.getElementById('amt');
       input.setAttribute("value","Rs:- "+cal+"/-");
    }



function UpdateList(ElementValue)
    {
        with(document.forms.myform)
        {
            if(ElementValue == "Non-veg")
            {
                optionlist[0].text = "Egg Sandwiche";
                
                optionlist[1].text = "Grilled Chicken & Sauce";
              
                optionlist[2].text = "Chicken Biryani";
                
                optionlist[3].text = "Chicken Cup";

                optionlist[4].text = "Chiken Roll";

                optionlist[5].text = "Chicken Sticks";

                optionlist[6].text = "Egg with sliced tomato";

                optionlist[7].text = "Chicken Rice";

                optionlist[8].text = "Egg Salad";

                optionlist[9].text = "Chicken Pizza";

                optionlist[10].text = "Chicken Sandwish";

                optionlist[11].text = "Chicken Tikki";

                optionlist[12].text = "Chicken Cheese Pizza";

                optionlist[13].text = "Chicken Cheese Pizza With sauce";
                
            }

            if(ElementValue == "drink")
            {
               
                optionlist[0].text = "Mix Fruit Juice";
                
                optionlist[1].text = "Banana Smoothie";
              
                optionlist[2].text = "Strawberries & Blackberries";
                
                optionlist[3].text = "Chocolate Shake";

                optionlist[4].text = "Strawberry shake with Ice-cream";

                optionlist[5].text = "Apple Smoothie";

                optionlist[6].text = "Orange Juice";

                optionlist[7].text = "Pineapple Shake";

                optionlist[8].text = "Apple & Pineapple Mix Juice";

                optionlist[9].text = "Blackberry Juice";

                optionlist[10].text = "Mix Fruit Shake";

                optionlist[11].text = "Thumbs up";

                optionlist[12].text = "Frooti";

                optionlist[13].text = "Spirite";    
                
            }
        }
    }
</script>


<?php

 include "config.php";

 if (isset($_POST['submit'])) {
     extract($_POST);

     $add = mysqli_query($conn, "insert into orderform (Name, Contact, Email, Address, ItemType, ItemName, Quantity, TotalBill) 
     values ('$name', '$contact', '$email', '$address', '$fix', '$optionlist', '$quantity', '$wpn')") or die(mysqli_error($conn));

     
     if ($add) {
        echo "<script>;";
        echo "window.alert('Your Order is Placed.....');";
        echo 'window.location.href = "ItemOrder.php";';
        echo "</script>";
    } else {
        echo "<script>;";
        echo "window.alert('Data error....!');";
        echo "</script>";
    }
 }
?>

<?php
                        session_start();
                        $counter = 0;
						if (isset($_SESSION['name'])) {
                           $name = $_SESSION['name'];
                           $contact = $_SESSION['contact'];
                           $email = $_SESSION['email'];
                           $address = $_SESSION['address'];
                           $fix = $_SESSION['fix'];
                           $optionlist = $_SESSION['optionlist'];
                           $quantity = $_SESSION['quantity'];
                           $wpn = $_SESSION['wpn'];
						 }else{
                           $name = [];
                           $contact = [];
                           $email = [];
                           $address = [];
                           $fix = [];
                           $optionlist = [];
                           $quantity = [];
                           $wpn = [];
                        } 
                        if(isset($_POST['name']))
                        {
                            $name[] = $_POST['name'];
                            $contact[] = $_POST['contact'];
                            $email[] = $_POST['email'];
                            $address[] = $_POST['address'];
                            $fix[] = $_POST['fix'];
                            $optionlist[] = $_POST['optionlist'];
                            $quantity[] = $_POST['quantity'];
                            $wpn[] = $_POST['wpn'];
                        } 
                        
                        $_SESSION['name'] = $name;
                        $_SESSION['contact'] = $contact;
                        $_SESSION['email'] = $email;
                        $_SESSION['address'] = $address;
                        $_SESSION['fix'] = $fix;
                        $_SESSION['optionlist'] = $optionlist;
                        $_SESSION['quantity'] = $quantity;
                        $_SESSION['wpn'] = $wpn;



                        unset($_SESSION['name']);
                        unset($_SESSION['contact']);
                        unset($_SESSION['email']);
                        unset($_SESSION['address']);
                        unset($_SESSION['fix']);
                        unset($_SESSION['optionlist']);
                        unset($_SESSION['quantity']);
                        unset($_SESSION['wpn']);
                    ?>
                    
                    <?php
            $count = 0;
            foreach($name as $key=>$value)
            {
                $count++;
                print"<br>$count: $name[$key], $contact[$key], $email[$key], $address[$key], $fix[$key], $optionlist[$key], $quantity[$key], $wpn[$key]";
            }
            ?>

