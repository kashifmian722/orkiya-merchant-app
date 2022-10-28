import 'controller/login_page_controller.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';
import 'package:merchant_app/widgets/custom_button.dart';

class LoginPageScreen extends GetWidget<LoginPageController> {
  @override
  Widget build(BuildContext context) {
    return SafeArea(
        child: Scaffold(
            backgroundColor: ColorConstant.yellow100,
            body: Container(
                width: size.width,
                child: SingleChildScrollView(
                    child: Column(
                        mainAxisSize: MainAxisSize.min,
                        mainAxisAlignment: MainAxisAlignment.center,
                        children: [
                      Align(
                          alignment: Alignment.centerRight,
                          child: Padding(
                              padding: getPadding(left: 10, top: 51),
                              child: Row(
                                  mainAxisAlignment: MainAxisAlignment.end,
                                  crossAxisAlignment: CrossAxisAlignment.start,
                                  mainAxisSize: MainAxisSize.max,
                                  children: [
                                    Padding(
                                        padding: getPadding(top: 64),
                                        child: CommonImageView(
                                            svgPath: ImageConstant
                                                .imgOrkiyalogosvgTeal900,
                                            height: getVerticalSize(58.00),
                                            width: getHorizontalSize(155.00))),
                                    Padding(
                                        padding:
                                            getPadding(left: 96, bottom: 58),
                                        child: CommonImageView(
                                            imagePath: ImageConstant.imgOffer,
                                            height: getVerticalSize(64.00),
                                            width: getHorizontalSize(32.00)))
                                  ]))),
                      Align(
                          alignment: Alignment.centerLeft,
                          child: Container(
                              height: getVerticalSize(18.00),
                              width: getHorizontalSize(118.00),
                              margin: getMargin(left: 28, top: 58, right: 28),
                              child: Stack(
                                  alignment: Alignment.centerLeft,
                                  children: [
                                    Align(
                                        alignment: Alignment.centerLeft,
                                        child: Text("lbl_email_address".tr,
                                            overflow: TextOverflow.ellipsis,
                                            textAlign: TextAlign.left,
                                            style: AppStyle.txtABeeZeeItalic18
                                                .copyWith(height: 1.00))),
                                    Align(
                                        alignment: Alignment.centerLeft,
                                        child: Text("lbl_email_address".tr,
                                            overflow: TextOverflow.ellipsis,
                                            textAlign: TextAlign.left,
                                            style: AppStyle.txtABeeZeeItalic18
                                                .copyWith(height: 1.00)))
                                  ]))),
                      Align(
                          alignment: Alignment.center,
                          child: Card(
                              clipBehavior: Clip.antiAlias,
                              elevation: 0,
                              margin: getMargin(left: 10, top: 19, right: 10),
                              shape: RoundedRectangleBorder(
                                  side: BorderSide(
                                      color: ColorConstant.black900,
                                      width: getHorizontalSize(1.00)),
                                  borderRadius:
                                      BorderRadiusStyle.roundedBorder5),
                              child: Container(
                                  height: getVerticalSize(49.00),
                                  width: getHorizontalSize(361.00),
                                  decoration: AppDecoration.outlineBlack900
                                      .copyWith(
                                          borderRadius:
                                              BorderRadiusStyle.roundedBorder5),
                                  child: Stack(
                                      alignment: Alignment.topLeft,
                                      children: [
                                        Align(
                                            alignment: Alignment.topLeft,
                                            child: Padding(
                                                padding: getPadding(
                                                    left: 14,
                                                    top: 10,
                                                    right: 14,
                                                    bottom: 10),
                                                child: Text("lbl_email".tr,
                                                    overflow:
                                                        TextOverflow.ellipsis,
                                                    textAlign: TextAlign.left,
                                                    style: AppStyle
                                                        .txtABeeZeeRegular18
                                                        .copyWith(
                                                            height: 1.00)))),
                                        Align(
                                            alignment: Alignment.topLeft,
                                            child: Padding(
                                                padding: getPadding(
                                                    left: 14,
                                                    top: 10,
                                                    right: 14,
                                                    bottom: 10),
                                                child: Text("lbl_email".tr,
                                                    overflow:
                                                        TextOverflow.ellipsis,
                                                    textAlign: TextAlign.left,
                                                    style: AppStyle
                                                        .txtABeeZeeRegular18
                                                        .copyWith(
                                                            height: 1.00))))
                                      ])))),
                      Align(
                          alignment: Alignment.centerLeft,
                          child: Container(
                              height: getVerticalSize(18.00),
                              width: getHorizontalSize(80.00),
                              margin: getMargin(left: 28, top: 21, right: 28),
                              child: Stack(
                                  alignment: Alignment.centerLeft,
                                  children: [
                                    Align(
                                        alignment: Alignment.centerLeft,
                                        child: Text("lbl_password".tr,
                                            overflow: TextOverflow.ellipsis,
                                            textAlign: TextAlign.left,
                                            style: AppStyle.txtABeeZeeItalic18
                                                .copyWith(height: 1.00))),
                                    Align(
                                        alignment: Alignment.centerLeft,
                                        child: Text("lbl_password".tr,
                                            overflow: TextOverflow.ellipsis,
                                            textAlign: TextAlign.left,
                                            style: AppStyle.txtABeeZeeItalic18
                                                .copyWith(height: 1.00)))
                                  ]))),
                      Align(
                          alignment: Alignment.center,
                          child: Container(
                              height: getVerticalSize(49.00),
                              width: getHorizontalSize(361.00),
                              margin: getMargin(left: 10, top: 13, right: 10),
                              decoration: BoxDecoration(
                                  borderRadius: BorderRadius.circular(
                                      getHorizontalSize(5.00)),
                                  border: Border.all(
                                      color: ColorConstant.black900,
                                      width: getHorizontalSize(1.00))))),
                      CustomButton(
                          width: 361,
                          text: "lbl_log_in".tr,
                          margin: getMargin(left: 10, top: 41, right: 10),
                          onTap: onTapBtnLogin,
                          alignment: Alignment.center),
                      Align(
                          alignment: Alignment.centerRight,
                          child: GestureDetector(
                              onTap: () {
                                onTapTxtNeedtoregiste();
                              },
                              child: Container(
                                  margin:
                                      getMargin(left: 68, top: 9, right: 68),
                                  child: RichText(
                                      text: TextSpan(children: [
                                        TextSpan(
                                            text: "msg_need_to_registe2".tr,
                                            style: TextStyle(
                                                color: ColorConstant.black900,
                                                fontSize: getFontSize(15),
                                                fontFamily: 'ABeeZee',
                                                fontWeight: FontWeight.w400,
                                                height: 1.00)),
                                        TextSpan(
                                            text: "lbl_signup".tr,
                                            style: TextStyle(
                                                color: ColorConstant.indigoA700,
                                                fontSize: getFontSize(15),
                                                fontFamily: 'ABeeZee',
                                                fontWeight: FontWeight.w400,
                                                height: 1.00))
                                      ]),
                                      textAlign: TextAlign.left)))),
                      Align(
                          alignment: Alignment.centerLeft,
                          child: Padding(
                              padding:
                                  getPadding(top: 43, right: 10, bottom: 20),
                              child: CommonImageView(
                                  imagePath: ImageConstant.imgEllipse10,
                                  height: getVerticalSize(148.00),
                                  width: getHorizontalSize(74.00))))
                    ])))));
  }

  onTapBtnLogin() {
    Get.toNamed(AppRoutes.dashboardScreen);
  }

  onTapTxtNeedtoregiste() {
    Get.toNamed(AppRoutes.signUpPageScreen);
  }
}
