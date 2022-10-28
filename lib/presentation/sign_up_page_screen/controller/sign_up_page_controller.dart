import '/core/app_export.dart';
import 'package:merchant_app/presentation/sign_up_page_screen/models/sign_up_page_model.dart';
import 'package:flutter/material.dart';

class SignUpPageController extends GetxController {
  TextEditingController groupNineController = TextEditingController();

  Rx<SignUpPageModel> signUpPageModelObj = SignUpPageModel().obs;

  RxBool checkbox = false.obs;

  @override
  void onReady() {
    super.onReady();
  }

  @override
  void onClose() {
    super.onClose();
    groupNineController.dispose();
  }
}
