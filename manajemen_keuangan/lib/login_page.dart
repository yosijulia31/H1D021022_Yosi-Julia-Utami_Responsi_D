import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      theme: ThemeData(
        primarySwatch: Colors.green,  // Warna nuansa hijau
        brightness: Brightness.light,
        textTheme: TextTheme(
          bodyMedium: TextStyle(fontFamily: 'Times New Roman'),  // Menggunakan font Times New Roman
        ),
        elevatedButtonTheme: ElevatedButtonThemeData(
          style: ElevatedButton.styleFrom(
            backgroundColor: Colors.green, // Ganti primary menjadi backgroundColor
            foregroundColor: Colors.white, // Ganti onPrimary menjadi foregroundColor
            textStyle: TextStyle(fontFamily: 'Times New Roman', fontSize: 16),
          ),
        ),
        inputDecorationTheme: InputDecorationTheme(
          border: OutlineInputBorder(),
          enabledBorder: OutlineInputBorder(
            borderSide: BorderSide(color: Colors.green),  // Border hijau pada TextField
          ),
          focusedBorder: OutlineInputBorder(
            borderSide: BorderSide(color: Colors.green),  // Border hijau ketika fokus
          ),
        ),
      ),
      home: LoginPage(),
    );
  }
}

class LoginPage extends StatefulWidget {
  @override
  _LoginPageState createState() => _LoginPageState();
}

class _LoginPageState extends State<LoginPage> {
  TextEditingController emailController = TextEditingController();
  TextEditingController passwordController = TextEditingController();

  void login() async {
    var url = 'http://responsi.webwizards.my.id/api/login';  // Ganti dengan URL API Anda
    var response = await http.post(
      Uri.parse(url),
      body: {
        'email': emailController.text,
        'password': passwordController.text,
      },
    );

    if (response.statusCode == 200) {
      var data = json.decode(response.body);
      print('Login berhasil, token: ${data['token']}'); // Simpan token untuk session
    } else {
      print('Login gagal');
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Login'),
        backgroundColor: Colors.green,  // Nuansa hijau pada AppBar
      ),
      body: Padding(
        padding: EdgeInsets.all(16.0),
        child: Column(
          children: [
            TextField(
              controller: emailController,
              decoration: InputDecoration(
                labelText: 'Email',
                labelStyle: TextStyle(fontFamily: 'Times New Roman'),  // Font TNR pada label
              ),
            ),
            SizedBox(height: 16),
            TextField(
              controller: passwordController,
              decoration: InputDecoration(
                labelText: 'Password',
                labelStyle: TextStyle(fontFamily: 'Times New Roman'),  // Font TNR pada label
              ),
              obscureText: true,
            ),
            SizedBox(height: 20),
            ElevatedButton(
              onPressed: login,
              child: Text('Login'),
            ),
          ],
        ),
      ),
    );
  }
}
