function checkAge($user_age)
{
    if($user_age >= 21) {
        return "You can drink!";
    }
    else {
        return "No drinks for you!";
    }
}
