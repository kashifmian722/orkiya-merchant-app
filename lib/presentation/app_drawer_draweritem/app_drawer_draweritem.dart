import 'controller/app_drawer_controller.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';

// ignore_for_file: must_be_immutable
class AppDrawerDraweritem extends StatelessWidget {
  AppDrawerDraweritem(this.controller);

  AppDrawerController controller;

  @override
  Widget build(BuildContext context) {
    return Container(
        width: double.infinity,
        decoration: AppDecoration.fillBluegray900a2,
        child: Column(
            mainAxisSize: MainAxisSize.min,
            crossAxisAlignment: CrossAxisAlignment.center,
            mainAxisAlignment: MainAxisAlignment.end,
            children: [
              Align(
                  alignment: Alignment.centerLeft,
                  child: Container(
                      width: getHorizontalSize(239.00),
                      margin: getMargin(right: 173),
                      decoration: AppDecoration.fillLightgreen100,
                      child: Column(
                          mainAxisSize: MainAxisSize.min,
                          mainAxisAlignment: MainAxisAlignment.start,
                          children: [
                            Align(
                                alignment: Alignment.centerLeft,
                                child: Padding(
                                    padding: getPadding(
                                        left: 27, top: 36, right: 27),
                                    child: CommonImageView(
                                        svgPath: ImageConstant
                                            .imgOrkiyalogosvgTeal900,
                                        height: getVerticalSize(58.00),
                                        width: getHorizontalSize(155.00)))),
                            Align(
                                alignment: Alignment.centerLeft,
                                child: GestureDetector(
                                    onTap: () {
                                      onTapTxtOrders();
                                    },
                                    child: Padding(
                                        padding: getPadding(
                                            left: 55, top: 95, right: 55),
                                        child: Text("lbl_orders".tr,
                                            overflow: TextOverflow.ellipsis,
                                            textAlign: TextAlign.left,
                                            style: AppStyle.txtABeeZeeItalic18
                                                .copyWith(height: 1.00))))),
                            Align(
                                alignment: Alignment.centerLeft,
                                child: GestureDetector(
                                    onTap: () {
                                      onTapTxtProducts();
                                    },
                                    child: Padding(
                                        padding: getPadding(
                                            left: 55, top: 32, right: 55),
                                        child: Text("lbl_products".tr,
                                            overflow: TextOverflow.ellipsis,
                                            textAlign: TextAlign.left,
                                            style: AppStyle.txtABeeZeeItalic18
                                                .copyWith(height: 1.00))))),
                            Align(
                                alignment: Alignment.centerLeft,
                                child: Padding(
                                    padding: getPadding(
                                        left: 55, top: 33, right: 55),
                                    child: Text("lbl_settings".tr,
                                        overflow: TextOverflow.ellipsis,
                                        textAlign: TextAlign.left,
                                        style: AppStyle.txtABeeZeeItalic18
                                            .copyWith(height: 1.00)))),
                            Align(
                                alignment: Alignment.centerLeft,
                                child: GestureDetector(
                                    onTap: () {
                                      onTapTxtLogout();
                                    },
                                    child: Padding(
                                        padding: getPadding(
                                            left: 55,
                                            top: 27,
                                            right: 55,
                                            bottom: 20),
                                        child: Text("lbl_log_out".tr,
                                            overflow: TextOverflow.ellipsis,
                                            textAlign: TextAlign.left,
                                            style: AppStyle.txtABeeZeeItalic18
                                                .copyWith(height: 1.00)))))
                          ])))
            ]));
  }

  onTapTxtOrders() {
    Get.toNamed(AppRoutes.orderScreen);
  }

  onTapTxtProducts() {
    Get.toNamed(AppRoutes.productsScreen);
  }

  onTapTxtLogout() {
    Get.toNamed(AppRoutes.loginPageScreen);
  }
}
