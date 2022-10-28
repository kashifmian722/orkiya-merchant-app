import '/core/app_export.dart';
import 'package:merchant_app/presentation/products_screen/models/products_model.dart';
import 'package:flutter/material.dart';

class ProductsController extends GetxController {
  TextEditingController groupTwentyController = TextEditingController();

  Rx<ProductsModel> productsModelObj = ProductsModel().obs;

  @override
  void onReady() {
    super.onReady();
  }

  @override
  void onClose() {
    super.onClose();
    groupTwentyController.dispose();
  }
}
