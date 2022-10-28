import 'controller/add_product_controller.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';
import 'package:merchant_app/core/utils/validation_functions.dart';
import 'package:merchant_app/widgets/custom_button.dart';
import 'package:merchant_app/widgets/custom_drop_down.dart';
import 'package:merchant_app/widgets/custom_switch.dart';
import 'package:merchant_app/widgets/custom_text_form_field.dart';

// ignore_for_file: must_be_immutable
class AddProductScreen extends GetWidget<AddProductController> {
  GlobalKey<FormState> _formKey = GlobalKey<FormState>();

  @override
  Widget build(BuildContext context) {
    return SafeArea(
        child: Scaffold(
            backgroundColor: ColorConstant.yellow100,
            body: Form(
                key: _formKey,
                autovalidateMode: AutovalidateMode.onUserInteraction,
                child: Column(
                    mainAxisSize: MainAxisSize.min,
                    crossAxisAlignment: CrossAxisAlignment.start,
                    mainAxisAlignment: MainAxisAlignment.end,
                    children: [
                      Container(
                          width: size.width,
                          margin: getMargin(top: 41),
                          child: Padding(
                              padding: getPadding(left: 25, right: 175),
                              child: Row(
                                  mainAxisAlignment: MainAxisAlignment.start,
                                  crossAxisAlignment: CrossAxisAlignment.center,
                                  mainAxisSize: MainAxisSize.max,
                                  children: [
                                    Padding(
                                        padding: getPadding(top: 7, bottom: 8),
                                        child: InkWell(
                                            onTap: () {
                                              onTapImgArrowleft();
                                            },
                                            child: CommonImageView(
                                                svgPath:
                                                    ImageConstant.imgArrowleft,
                                                height: getVerticalSize(14.00),
                                                width:
                                                    getHorizontalSize(20.00)))),
                                    Padding(
                                        padding: getPadding(left: 17),
                                        child: Text("lbl_add_product".tr,
                                            overflow: TextOverflow.ellipsis,
                                            textAlign: TextAlign.left,
                                            style: AppStyle.txtABeeZeeItalic30
                                                .copyWith(height: 1.00)))
                                  ]))),
                      Expanded(
                          child: SingleChildScrollView(
                              child: Padding(
                                  padding: getPadding(
                                      left: 17, top: 25, right: 17, bottom: 20),
                                  child: Column(
                                      mainAxisSize: MainAxisSize.min,
                                      crossAxisAlignment:
                                          CrossAxisAlignment.start,
                                      mainAxisAlignment:
                                          MainAxisAlignment.start,
                                      children: [
                                        Container(
                                            width: double.infinity,
                                            decoration: AppDecoration
                                                .outlineLightblue90026
                                                .copyWith(
                                                    borderRadius:
                                                        BorderRadiusStyle
                                                            .roundedBorder20),
                                            child: Column(
                                                mainAxisSize: MainAxisSize.min,
                                                crossAxisAlignment:
                                                    CrossAxisAlignment.center,
                                                mainAxisAlignment:
                                                    MainAxisAlignment.center,
                                                children: [
                                                  CustomTextFormField(
                                                      width: 329,
                                                      focusNode: FocusNode(),
                                                      controller: controller
                                                          .groupFortyController,
                                                      hintText:
                                                          "lbl_product_name".tr,
                                                      margin: getMargin(
                                                          left: 24,
                                                          top: 30,
                                                          right: 24),
                                                      validator: (value) {
                                                        if (!isText(value)) {
                                                          return "Please enter valid text";
                                                        }
                                                        return null;
                                                      }),
                                                  CustomTextFormField(
                                                      width: 329,
                                                      focusNode: FocusNode(),
                                                      controller: controller
                                                          .groupThirtyNineController,
                                                      hintText:
                                                          "lbl_description".tr,
                                                      margin: getMargin(
                                                          left: 24,
                                                          top: 12,
                                                          right: 24),
                                                      padding:
                                                          TextFormFieldPadding
                                                              .PaddingAll12,
                                                      maxLines: 5),
                                                  Padding(
                                                      padding: getPadding(
                                                          left: 24,
                                                          top: 12,
                                                          right: 24),
                                                      child: Row(
                                                          mainAxisAlignment:
                                                              MainAxisAlignment
                                                                  .start,
                                                          crossAxisAlignment:
                                                              CrossAxisAlignment
                                                                  .center,
                                                          mainAxisSize:
                                                              MainAxisSize.max,
                                                          children: [
                                                            CustomTextFormField(
                                                                width: 155,
                                                                focusNode:
                                                                    FocusNode(),
                                                                controller:
                                                                    controller
                                                                        .groupThirtyEightController,
                                                                hintText:
                                                                    "lbl_price"
                                                                        .tr),
                                                            CustomTextFormField(
                                                                width: 155,
                                                                focusNode:
                                                                    FocusNode(),
                                                                controller:
                                                                    controller
                                                                        .groupThirtyFourController,
                                                                hintText:
                                                                    "lbl_list_price"
                                                                        .tr,
                                                                margin:
                                                                    getMargin(
                                                                        left:
                                                                            16))
                                                          ])),
                                                  Padding(
                                                      padding: getPadding(
                                                          left: 24,
                                                          top: 19,
                                                          right: 24),
                                                      child: Row(
                                                          mainAxisAlignment:
                                                              MainAxisAlignment
                                                                  .start,
                                                          crossAxisAlignment:
                                                              CrossAxisAlignment
                                                                  .center,
                                                          mainAxisSize:
                                                              MainAxisSize.max,
                                                          children: [
                                                            CustomTextFormField(
                                                                width: 155,
                                                                focusNode:
                                                                    FocusNode(),
                                                                controller:
                                                                    controller
                                                                        .groupThirtySevenController,
                                                                hintText:
                                                                    "lbl_stock"
                                                                        .tr),
                                                            CustomTextFormField(
                                                                width: 155,
                                                                focusNode:
                                                                    FocusNode(),
                                                                controller:
                                                                    controller
                                                                        .groupThirtyFiveController,
                                                                hintText:
                                                                    "lbl_available_stock"
                                                                        .tr,
                                                                margin:
                                                                    getMargin(
                                                                        left:
                                                                            17))
                                                          ])),
                                                  CustomDropDown(
                                                      width: 329,
                                                      focusNode: FocusNode(),
                                                      icon: Container(
                                                          margin: getMargin(
                                                              left: 30,
                                                              right: 15),
                                                          child: CommonImageView(
                                                              svgPath: ImageConstant
                                                                  .imgArrowdown)),
                                                      hintText: "lbl_tax".tr,
                                                      margin: getMargin(
                                                          left: 24,
                                                          top: 19,
                                                          right: 24),
                                                      items: controller
                                                          .addProductModelObj
                                                          .value
                                                          .dropdownItemList,
                                                      onChanged: (value) {
                                                        controller
                                                            .onSelected(value);
                                                      }),
                                                  Padding(
                                                      padding: getPadding(
                                                          left: 24,
                                                          top: 20,
                                                          right: 24),
                                                      child: Row(
                                                          mainAxisAlignment:
                                                              MainAxisAlignment
                                                                  .start,
                                                          crossAxisAlignment:
                                                              CrossAxisAlignment
                                                                  .center,
                                                          mainAxisSize:
                                                              MainAxisSize.max,
                                                          children: [
                                                            CommonImageView(
                                                                svgPath:
                                                                    ImageConstant
                                                                        .imgMaskgroup9,
                                                                height:
                                                                    getVerticalSize(
                                                                        84.00),
                                                                width:
                                                                    getHorizontalSize(
                                                                        136.00)),
                                                            Padding(
                                                                padding:
                                                                    getPadding(
                                                                        left: 9,
                                                                        top: 24,
                                                                        bottom:
                                                                            24),
                                                                child: Column(
                                                                    mainAxisSize:
                                                                        MainAxisSize
                                                                            .min,
                                                                    crossAxisAlignment:
                                                                        CrossAxisAlignment
                                                                            .end,
                                                                    mainAxisAlignment:
                                                                        MainAxisAlignment
                                                                            .start,
                                                                    children: [
                                                                      Padding(
                                                                          padding: getPadding(
                                                                              left:
                                                                                  143,
                                                                              right:
                                                                                  4),
                                                                          child: Text(
                                                                              "lbl_active".tr,
                                                                              overflow: TextOverflow.ellipsis,
                                                                              textAlign: TextAlign.left,
                                                                              style: AppStyle.txtABeeZeeRegular8.copyWith(height: 1.00))),
                                                                      Align(
                                                                          alignment:
                                                                              Alignment.centerLeft,
                                                                          child: Container(
                                                                              width: getHorizontalSize(170.00),
                                                                              margin: getMargin(top: 3),
                                                                              child: Row(mainAxisAlignment: MainAxisAlignment.spaceBetween, crossAxisAlignment: CrossAxisAlignment.center, mainAxisSize: MainAxisSize.max, children: [
                                                                                CustomButton(width: 105, text: "lbl_upload_image".tr, variant: ButtonVariant.FillGray100, padding: ButtonPadding.PaddingAll7, fontStyle: ButtonFontStyle.ABeeZeeRegular9),
                                                                                Obx(() => CustomSwitch(
                                                                                    margin: getMargin(top: 3, bottom: 3),
                                                                                    value: controller.isSelectedSwitch.value,
                                                                                    onChanged: (value) {
                                                                                      controller.isSelectedSwitch.value = value;
                                                                                    }))
                                                                              ])))
                                                                    ]))
                                                          ])),
                                                  CustomTextFormField(
                                                      width: 329,
                                                      focusNode: FocusNode(),
                                                      controller: controller
                                                          .groupThirtyThreeController,
                                                      hintText: "lbl_tags".tr,
                                                      margin: getMargin(
                                                          left: 24,
                                                          top: 19,
                                                          right: 24),
                                                      padding:
                                                          TextFormFieldPadding
                                                              .PaddingTB24),
                                                  CustomTextFormField(
                                                      width: 329,
                                                      focusNode: FocusNode(),
                                                      controller: controller
                                                          .groupThirtyTwoController,
                                                      hintText:
                                                          "lbl_search_keywords"
                                                              .tr,
                                                      margin: getMargin(
                                                          left: 24,
                                                          top: 27,
                                                          right: 24,
                                                          bottom: 33),
                                                      padding:
                                                          TextFormFieldPadding
                                                              .PaddingTB21,
                                                      textInputAction:
                                                          TextInputAction.done)
                                                ])),
                                        CustomButton(
                                            width: 376,
                                            text: "lbl_save_product".tr,
                                            margin:
                                                getMargin(top: 36, right: 2),
                                            onTap: onTapBtnSaveproduct,
                                            alignment: Alignment.center)
                                      ]))))
                    ]))));
  }

  onTapImgArrowleft() {
    Get.back();
  }

  onTapBtnSaveproduct() {
    Get.toNamed(AppRoutes.productsScreen);
  }
}
