package com.example.signin;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class Signs extends AppCompatActivity {
EditText username, password;
Button signInBtn;
int count=0;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_signs);
        username = findViewById(R.id.usersname);
        password = findViewById(R.id.password);
        signInBtn = findViewById(R.id.signin);

        Bundle bundle = getIntent().getExtras();

        final String uname = bundle.getString("usersname");
        final String pwd = bundle.getString("password");

        signInBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String user = username.getText().toString();
                String pass = password.getText().toString();

                if(user.equals(uname) && pass.equals(pwd)){
                    Toast.makeText(Signs.this, "Success", Toast.LENGTH_SHORT).show();
                }
                else {
                    count++;
                    if (count >= 3) {
                        signInBtn.setEnabled(false);
                    } else {
                        Toast.makeText(Signs.this, "Failed", Toast.LENGTH_SHORT).show();
                    }
                }

            }
        });


    }
}