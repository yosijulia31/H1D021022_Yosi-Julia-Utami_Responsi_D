import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';

class AddKategoriTransaksiPage extends StatelessWidget {
  final TextEditingController transactionController = TextEditingController();
  final TextEditingController typeController = TextEditingController();
  final TextEditingController amountController = TextEditingController();

  void addKategoriTransaksi() async {
    var url = 'http://103.196.155.42/api/keuangan/kategori_transaksi';  // Ganti dengan URL API backend Anda
    var response = await http.post(
      Uri.parse(url),
      headers: <String, String>{
        'Content-Type': 'application/json; charset=UTF-8',
      },
      body: jsonEncode(<String, String>{
        'transaction': transactionController.text,
        'type': typeController.text,
        'amount': amountController.text,
      }),
    );

    if (response.statusCode == 201) {
      print('Kategori transaksi berhasil ditambahkan');
    } else {
      print('Gagal menambahkan kategori transaksi: ${response.body}');
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Tambah Kategori Transaksi'),
      ),
      body: Padding(
        padding: EdgeInsets.all(16.0),
        child: Column(
          children: [
            TextField(
              controller: transactionController,
              decoration: InputDecoration(labelText: 'Nama Transaksi'),
            ),
            TextField(
              controller: typeController,
              decoration: InputDecoration(labelText: 'Tipe Transaksi (masuk/keluar)'),
            ),
            TextField(
              controller: amountController,
              decoration: InputDecoration(labelText: 'Jumlah'),
              keyboardType: TextInputType.number,
            ),
            SizedBox(height: 20),
            ElevatedButton(
              onPressed: addKategoriTransaksi,
              child: Text('Tambah Kategori'),
            ),
          ],
        ),
      ),
    );
  }
}
