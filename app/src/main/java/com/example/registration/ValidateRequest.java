//This class checks whether submitted userID is available to be registered

package com.example.registration;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;

import com.android.volley.AuthFailureError;
import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;
public class ValidateRequest extends StringRequest {

    final static private String URL = "http://sch1261315.cafe24.com/UserValidate.php";
    private Map<String, String> parameters;

    //    send parameter values to database by posting method
    public ValidateRequest(String userID, Response.Listener<String> listener) {
        super(Method.POST, URL, listener, null);
        parameters = new HashMap<>();
        parameters.put("userID",userID);
    }

    @Override
    protected Map<String, String> getParams(){
        return parameters;
    }
}

