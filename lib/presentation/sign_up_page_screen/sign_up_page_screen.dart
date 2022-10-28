import 'controller/sign_up_page_controller.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';
import 'package:merchant_app/core/utils/validation_functions.dart';
import 'package:merchant_app/widgets/custom_button.dart';
import 'package:merchant_app/widgets/custom_checkbox.dart';
import 'package:merchant_app/widgets/custom_text_form_field.dart';

class SignUpPageScreen extends GetWidget<SignUpPageController> {
  GlobalKey<FormState> _formKey = GlobalKey<FormState>();

  @override
  Widget build(BuildContext context) {
    return SafeArea(
      child: Scaffold(
        backgroundColor: ColorConstant.yellow100,
        body: Container(
          width: size.width,
          child: SingleChildScrollView(
            child: Form(
              key: _formKey,
              autovalidateMode: AutovalidateMode.onUserInteraction,
              child: Container(
                height: getVerticalSize(
                  778.00,
                ),
                width: getHorizontalSize(
                  412.00,
                ),
                child: Stack(
                  alignment: Alignment.topLeft,
                  children: [
                    CustomTextFormField(
                      width: 361,
                      focusNode: FocusNode(),
                      controller: controller.groupNineController,
                      hintText: "lbl_email".tr,
                      margin: getMargin(
                        left: 25,
                        top: 305,
                        right: 25,
                        bottom: 305,
                      ),
                      padding: TextFormFieldPadding.PaddingTB21,
                      textInputAction: TextInputAction.done,
                      alignment: Alignment.topCenter,
                      validator: (value) {
                        if (value == null ||
                            (!isValidEmail(value, isRequired: true))) {
                          return "Please enter valid email";
                        }
                        return null;
                      },
                    ),
                    Align(
                      alignment: Alignment.topLeft,
                      child: Padding(
                        padding: getPadding(
                          left: 39,
                          top: 214,
                          right: 39,
                          bottom: 214,
                        ),
                        child: Text(
                          "lbl_name".tr,
                          overflow: TextOverflow.ellipsis,
                          textAlign: TextAlign.left,
                          style: AppStyle.txtABeeZeeRegular18.copyWith(
                            height: 1.00,
                          ),
                        ),
                      ),
                    ),
                    Align(
                      alignment: Alignment.centerLeft,
                      child: Padding(
                        padding: getPadding(
                          left: 28,
                          top: 370,
                          right: 28,
                          bottom: 370,
                        ),
                        child: Text(
                          "lbl_password".tr,
                          overflow: TextOverflow.ellipsis,
                          textAlign: TextAlign.left,
                          style: AppStyle.txtABeeZeeItalic18.copyWith(
                            height: 1.00,
                          ),
                        ),
                      ),
                    ),
                    Align(
                      alignment: Alignment.bottomCenter,
                      child: Container(
                        height: getVerticalSize(
                          49.00,
                        ),
                        width: getHorizontalSize(
                          361.00,
                        ),
                        margin: getMargin(
                          left: 25,
                          top: 324,
                          right: 25,
                          bottom: 324,
                        ),
                        decoration: BoxDecoration(
                          borderRadius: BorderRadius.circular(
                            getHorizontalSize(
                              5.00,
                            ),
                          ),
                          border: Border.all(
                            color: ColorConstant.black900,
                            width: getHorizontalSize(
                              1.00,
                            ),
                          ),
                        ),
                      ),
                    ),
                    CustomButton(
                      width: 361,
                      text: "lbl_sign_up2".tr,
                      margin: getMargin(
                        left: 25,
                        top: 77,
                        right: 25,
                        bottom: 77,
                      ),
                      variant: ButtonVariant.OutlineBlack900_1,
                      alignment: Alignment.bottomCenter,
                    ),
                    Align(
                      alignment: Alignment.topLeft,
                      child: Padding(
                        padding: getPadding(
                          left: 28,
                          top: 268,
                          right: 28,
                          bottom: 268,
                        ),
                        child: Text(
                          "lbl_email_address".tr,
                          overflow: TextOverflow.ellipsis,
                          textAlign: TextAlign.left,
                          style: AppStyle.txtABeeZeeItalic18.copyWith(
                            height: 1.00,
                          ),
                        ),
                      ),
                    ),
                    Align(
                      alignment: Alignment.bottomCenter,
                      child: Padding(
                        padding: getPadding(
                          left: 27,
                          top: 192,
                          right: 27,
                          bottom: 192,
                        ),
                        child: Text(
                          "msg_i_have_read_the".tr,
                          overflow: TextOverflow.ellipsis,
                          textAlign: TextAlign.left,
                          style: AppStyle.txtABeeZeeItalic15Teal900.copyWith(
                            height: 1.00,
                          ),
                        ),
                      ),
                    ),
                    Align(
                      alignment: Alignment.bottomCenter,
                      child: Container(
                        height: getVerticalSize(
                          49.00,
                        ),
                        width: getHorizontalSize(
                          361.00,
                        ),
                        margin: getMargin(
                          left: 25,
                          top: 223,
                          right: 25,
                          bottom: 223,
                        ),
                        decoration: BoxDecoration(
                          borderRadius: BorderRadius.circular(
                            getHorizontalSize(
                              5.00,
                            ),
                          ),
                          border: Border.all(
                            color: ColorConstant.black900,
                            width: getHorizontalSize(
                              1.00,
                            ),
                          ),
                        ),
                      ),
                    ),
                    Align(
                      alignment: Alignment.topLeft,
                      child: Padding(
                        padding: getPadding(
                          left: 28,
                          top: 168,
                          right: 28,
                          bottom: 168,
                        ),
                        child: Text(
                          "lbl_business_name".tr,
                          overflow: TextOverflow.ellipsis,
                          textAlign: TextAlign.left,
                          style: AppStyle.txtABeeZeeItalic18.copyWith(
                            height: 1.00,
                          ),
                        ),
                      ),
                    ),
                    Align(
                      alignment: Alignment.topCenter,
                      child: Container(
                        height: getVerticalSize(
                          49.00,
                        ),
                        width: getHorizontalSize(
                          361.00,
                        ),
                        margin: getMargin(
                          left: 25,
                          top: 203,
                          right: 25,
                          bottom: 203,
                        ),
                        decoration: BoxDecoration(
                          borderRadius: BorderRadius.circular(
                            getHorizontalSize(
                              5.00,
                            ),
                          ),
                          border: Border.all(
                            color: ColorConstant.black900,
                            width: getHorizontalSize(
                              1.00,
                            ),
                          ),
                        ),
                      ),
                    ),
                    Align(
                      alignment: Alignment.bottomLeft,
                      child: Obx(
                        () => CustomCheckbox(
                          alignment: Alignment.bottomLeft,
                          text: "msg_i_accept_the_te".tr,
                          iconSize: 12,
                          value: controller.checkbox.value,
                          padding: getPadding(
                            left: 28,
                            top: 166,
                            right: 28,
                            bottom: 166,
                          ),
                          onChange: (value) {
                            controller.checkbox.value = value;
                          },
                        ),
                      ),
                    ),
                    Align(
                      alignment: Alignment.bottomLeft,
                      child: Padding(
                        padding: getPadding(
                          left: 28,
                          top: 289,
                          right: 28,
                          bottom: 289,
                        ),
                        child: Text(
                          "lbl_repeat_password".tr,
                          overflow: TextOverflow.ellipsis,
                          textAlign: TextAlign.left,
                          style: AppStyle.txtABeeZeeItalic18.copyWith(
                            height: 1.00,
                          ),
                        ),
                      ),
                    ),
                    Align(
                      alignment: Alignment.topCenter,
                      child: Padding(
                        padding: getPadding(
                          left: 128,
                          top: 79,
                          right: 128,
                          bottom: 79,
                        ),
                        child: CommonImageView(
                          svgPath: ImageConstant.imgOrkiyalogosvgTeal900,
                          height: getVerticalSize(
                            58.00,
                          ),
                          width: getHorizontalSize(
                            155.00,
                          ),
                        ),
                      ),
                    ),
                    Align(
                      alignment: Alignment.bottomRight,
                      child: Container(
                        width: getHorizontalSize(
                          345.00,
                        ),
                        margin: getMargin(
                          left: 23,
                          top: 10,
                          right: 23,
                        ),
                        child: Column(
                          mainAxisSize: MainAxisSize.min,
                          mainAxisAlignment: MainAxisAlignment.end,
                          children: [
                            Align(
                              alignment: Alignment.centerLeft,
                              child: Container(
                                height: getVerticalSize(
                                  29.00,
                                ),
                                width: getHorizontalSize(
                                  50.00,
                                ),
                                margin: getMargin(
                                  right: 10,
                                ),
                                child: Stack(
                                  alignment: Alignment.centerRight,
                                  children: [
                                    Align(
                                      alignment: Alignment.centerLeft,
                                      child: Container(
                                        height: getSize(
                                          29.00,
                                        ),
                                        width: getSize(
                                          29.00,
                                        ),
                                        margin: getMargin(
                                          right: 10,
                                        ),
                                        decoration: BoxDecoration(
                                          color: ColorConstant.indigoA400,
                                          borderRadius: BorderRadius.circular(
                                            getHorizontalSize(
                                              14.53,
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                    Align(
                                      alignment: Alignment.centerRight,
                                      child: Container(
                                        height: getSize(
                                          29.00,
                                        ),
                                        width: getSize(
                                          29.00,
                                        ),
                                        margin: getMargin(
                                          left: 10,
                                        ),
                                        decoration: BoxDecoration(
                                          color: ColorConstant.orange400,
                                          borderRadius: BorderRadius.circular(
                                            getHorizontalSize(
                                              14.53,
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                  ],
                                ),
                              ),
                            ),
                            Align(
                              alignment: Alignment.centerRight,
                              child: Container(
                                height: getVerticalSize(
                                  43.00,
                                ),
                                width: getHorizontalSize(
                                  83.00,
                                ),
                                margin: getMargin(
                                  left: 262,
                                  top: 669,
                                  right: 1,
                                ),
                                child: Stack(
                                  alignment: Alignment.bottomLeft,
                                  children: [
                                    Align(
                                      alignment: Alignment.topRight,
                                      child: Padding(
                                        padding: getPadding(
                                          left: 10,
                                          bottom: 10,
                                        ),
                                        child: CommonImageView(
                                          svgPath: ImageConstant.imgContrast,
                                          height: getVerticalSize(
                                            35.00,
                                          ),
                                          width: getHorizontalSize(
                                            71.00,
                                          ),
                                        ),
                                      ),
                                    ),
                                    Align(
                                      alignment: Alignment.bottomLeft,
                                      child: Padding(
                                        padding: getPadding(
                                          top: 10,
                                          right: 10,
                                        ),
                                        child: CommonImageView(
                                          svgPath: ImageConstant.imgPath44909,
                                          height: getVerticalSize(
                                            25.00,
                                          ),
                                          width: getHorizontalSize(
                                            51.00,
                                          ),
                                        ),
                                      ),
                                    ),
                                  ],
                                ),
                              ),
                            ),
                          ],
                        ),
                      ),
                    ),
                  ],
                ),
              ),
            ),
          ),
        ),
      ),
    );
  }
}
