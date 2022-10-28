import '/core/app_export.dart';
import 'package:merchant_app/presentation/add_product_screen/models/add_product_model.dart';
import 'package:flutter/material.dart';

class AddProductController extends GetxController {
  TextEditingController groupFortyController = TextEditingController();

  TextEditingController groupThirtyNineController = TextEditingController();

  TextEditingController groupThirtyEightController = TextEditingController();

  TextEditingController groupThirtyFourController = TextEditingController();

  TextEditingController groupThirtySevenController = TextEditingController();

  TextEditingController groupThirtyFiveController = TextEditingController();

  TextEditingController groupThirtyThreeController = TextEditingController();

  TextEditingController groupThirtyTwoController = TextEditingController();

  Rx<AddProductModel> addProductModelObj = AddProductModel().obs;

  RxBool isSelectedSwitch = false.obs;

  SelectionPopupModel? selectedDropDownValue;

  @override
  void onReady() {
    super.onReady();
  }

  @override
  void onClose() {
    super.onClose();
    groupFortyController.dispose();
    groupThirtyNineController.dispose();
    groupThirtyEightController.dispose();
    groupThirtyFourController.dispose();
    groupThirtySevenController.dispose();
    groupThirtyFiveController.dispose();
    groupThirtyThreeController.dispose();
    groupThirtyTwoController.dispose();
  }

  onSelected(dynamic value) {
    selectedDropDownValue = value as SelectionPopupModel;
    addProductModelObj.value.dropdownItemList.forEach((element) {
      element.isSelected = false;
      if (element.id == value.id) {
        element.isSelected = true;
      }
    });
    addProductModelObj.value.dropdownItemList.refresh();
  }
}
