import 'package:flutter/material.dart';
import 'login_page.dart';
import 'register_page.dart';
import 'add-kategori_transaksi.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Aplikasi Manajemen Keuangan',
      theme: ThemeData(
        primarySwatch: Colors.green,
        brightness: Brightness.dark,
        textTheme: TextTheme(
          bodyMedium: TextStyle(fontFamily: 'Times New Roman'),
        ),
      ),
      initialRoute: '/',
      routes: {
        '/': (context) => LoginPage(),
        '/register': (context) => RegisterPage(),
        '/add-kategori-transaksi': (context) => AddKategoriTransaksiPage(),
      },
    );
  }
}
