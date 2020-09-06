package com.example.registration;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;

import com.android.volley.AuthFailureError;
import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

public class RegisterRequest extends StringRequest {

    final static private String URL = "http://sch1261315.cafe24.com/UserRegister.php";
    private Map<String, String> parameters;

//    send parameter values to database by posting method
    public RegisterRequest(String userID, String userPassword, String userEmail, String userGender, String userMajor, Response.Listener<String> listener) {
        super(Method.POST, URL, listener, null);
        parameters = new HashMap<>();
        parameters.put("userID",userID);
        parameters.put("userPassword",userPassword);
        parameters.put("userEmail",userEmail);
        parameters.put("userGender",userGender);
        parameters.put("userMajor",userMajor);
    }

    @Override
    protected Map<String, String> getParams(){
        return parameters;
    }
}

