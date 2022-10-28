import '/core/app_export.dart';
import 'package:merchant_app/presentation/add_order_screen/models/add_order_model.dart';
import 'package:flutter/material.dart';

class AddOrderController extends GetxController {
  TextEditingController groupFifteenController = TextEditingController();

  TextEditingController group9302Controller = TextEditingController();

  TextEditingController group9303Controller = TextEditingController();

  Rx<AddOrderModel> addOrderModelObj = AddOrderModel().obs;

  @override
  void onReady() {
    super.onReady();
  }

  @override
  void onClose() {
    super.onClose();
    groupFifteenController.dispose();
    group9302Controller.dispose();
    group9303Controller.dispose();
  }
}
