import '../app_drawer_draweritem/app_drawer_draweritem.dart';
import '../app_drawer_draweritem/controller/app_drawer_controller.dart';
import '../dashboard_screen/widgets/dashboard_item_widget.dart';
import 'controller/dashboard_controller.dart';
import 'models/dashboard_item_model.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';
import 'package:merchant_app/widgets/custom_icon_button.dart';

// ignore_for_file: must_be_immutable
class DashboardScreen extends GetWidget<DashboardController> {
  GlobalKey<ScaffoldState> _scaffoldKey = GlobalKey<ScaffoldState>();

  @override
  Widget build(BuildContext context) {
    return SafeArea(
        child: Scaffold(
            key: _scaffoldKey,
            backgroundColor: ColorConstant.yellow100,
            drawer: AppDrawerDraweritem(AppDrawerController()),
            body: Container(
                width: size.width,
                child: SingleChildScrollView(
                    child: Column(
                        mainAxisSize: MainAxisSize.min,
                        crossAxisAlignment: CrossAxisAlignment.center,
                        mainAxisAlignment: MainAxisAlignment.center,
                        children: [
                      Align(
                          alignment: Alignment.centerLeft,
                          child: Container(
                              width: size.width,
                              margin: getMargin(top: 36),
                              child: Padding(
                                  padding: getPadding(left: 24, right: 27),
                                  child: Row(
                                      mainAxisAlignment:
                                          MainAxisAlignment.spaceBetween,
                                      crossAxisAlignment:
                                          CrossAxisAlignment.start,
                                      mainAxisSize: MainAxisSize.max,
                                      children: [
                                        Padding(
                                            padding:
                                                getPadding(top: 5, bottom: 2),
                                            child: Row(
                                                crossAxisAlignment:
                                                    CrossAxisAlignment.center,
                                                mainAxisSize: MainAxisSize.max,
                                                children: [
                                                  Padding(
                                                      padding: getPadding(
                                                          top: 9, bottom: 11),
                                                      child: InkWell(
                                                          onTap: () {
                                                            onTapImgMenu();
                                                          },
                                                          child: CommonImageView(
                                                              svgPath:
                                                                  ImageConstant
                                                                      .imgMenu,
                                                              height:
                                                                  getVerticalSize(
                                                                      11.00),
                                                              width:
                                                                  getHorizontalSize(
                                                                      18.00)))),
                                                  Padding(
                                                      padding:
                                                          getPadding(left: 12),
                                                      child: Text(
                                                          "lbl_today_s_stats"
                                                              .tr,
                                                          overflow: TextOverflow
                                                              .ellipsis,
                                                          textAlign:
                                                              TextAlign.left,
                                                          style: AppStyle
                                                              .txtABeeZeeItalic30
                                                              .copyWith(
                                                                  height:
                                                                      1.00)))
                                                ])),
                                        CustomIconButton(
                                            height: 40,
                                            width: 40,
                                            child: CommonImageView(
                                                svgPath: ImageConstant
                                                    .imgNotification))
                                      ])))),
                      GestureDetector(
                          onTap: () {
                            onTapColumntodaysturnove();
                          },
                          child: Container(
                              width: double.infinity,
                              margin: getMargin(left: 17, top: 31, right: 17),
                              decoration: AppDecoration.outlineLightblue90026
                                  .copyWith(
                                      borderRadius:
                                          BorderRadiusStyle.roundedBorder20),
                              child: Column(
                                  mainAxisSize: MainAxisSize.min,
                                  crossAxisAlignment: CrossAxisAlignment.start,
                                  mainAxisAlignment: MainAxisAlignment.start,
                                  children: [
                                    Padding(
                                        padding: getPadding(
                                            left: 21, top: 15, right: 21),
                                        child: Text("msg_today_s_turnove".tr,
                                            overflow: TextOverflow.ellipsis,
                                            textAlign: TextAlign.left,
                                            style: AppStyle.txtABeeZeeItalic18
                                                .copyWith(height: 1.00))),
                                    Padding(
                                        padding: getPadding(
                                            left: 22,
                                            top: 23,
                                            right: 22,
                                            bottom: 39),
                                        child: Text("lbl_pkr_7500".tr,
                                            overflow: TextOverflow.ellipsis,
                                            textAlign: TextAlign.left,
                                            style: AppStyle.txtABeeZeeItalic30
                                                .copyWith(height: 1.00)))
                                  ]))),
                      Padding(
                          padding: getPadding(left: 17, top: 19, right: 17),
                          child: Row(
                              mainAxisAlignment: MainAxisAlignment.spaceBetween,
                              crossAxisAlignment: CrossAxisAlignment.center,
                              mainAxisSize: MainAxisSize.max,
                              children: [
                                GestureDetector(
                                    onTap: () {
                                      onTapColumnorders();
                                    },
                                    child: Container(
                                        decoration: AppDecoration
                                            .outlineLightblue90026
                                            .copyWith(
                                                borderRadius: BorderRadiusStyle
                                                    .roundedBorder20),
                                        child: Column(
                                            mainAxisSize: MainAxisSize.min,
                                            crossAxisAlignment:
                                                CrossAxisAlignment.start,
                                            mainAxisAlignment:
                                                MainAxisAlignment.start,
                                            children: [
                                              Padding(
                                                  padding: getPadding(
                                                      left: 23,
                                                      top: 15,
                                                      right: 23),
                                                  child: Text("lbl_orders".tr,
                                                      overflow:
                                                          TextOverflow.ellipsis,
                                                      textAlign: TextAlign.left,
                                                      style: AppStyle
                                                          .txtABeeZeeItalic18
                                                          .copyWith(
                                                              height: 1.00))),
                                              Padding(
                                                  padding: getPadding(
                                                      left: 23,
                                                      top: 25,
                                                      right: 23,
                                                      bottom: 39),
                                                  child: Text("lbl_75".tr,
                                                      overflow:
                                                          TextOverflow.ellipsis,
                                                      textAlign: TextAlign.left,
                                                      style: AppStyle
                                                          .txtABeeZeeItalic30
                                                          .copyWith(
                                                              height: 1.00)))
                                            ]))),
                                GestureDetector(
                                    onTap: () {
                                      onTapColumnproducts();
                                    },
                                    child: Container(
                                        decoration: AppDecoration
                                            .outlineLightblue90026
                                            .copyWith(
                                                borderRadius: BorderRadiusStyle
                                                    .roundedBorder20),
                                        child: Column(
                                            mainAxisSize: MainAxisSize.min,
                                            crossAxisAlignment:
                                                CrossAxisAlignment.start,
                                            mainAxisAlignment:
                                                MainAxisAlignment.start,
                                            children: [
                                              Padding(
                                                  padding: getPadding(
                                                      left: 23,
                                                      top: 15,
                                                      right: 23),
                                                  child: Text("lbl_products".tr,
                                                      overflow:
                                                          TextOverflow.ellipsis,
                                                      textAlign: TextAlign.left,
                                                      style: AppStyle
                                                          .txtABeeZeeItalic18
                                                          .copyWith(
                                                              height: 1.00))),
                                              Padding(
                                                  padding: getPadding(
                                                      left: 23,
                                                      top: 25,
                                                      right: 23,
                                                      bottom: 39),
                                                  child: Text("lbl_20".tr,
                                                      overflow:
                                                          TextOverflow.ellipsis,
                                                      textAlign: TextAlign.left,
                                                      style: AppStyle
                                                          .txtABeeZeeItalic30
                                                          .copyWith(
                                                              height: 1.00)))
                                            ])))
                              ])),
                      Container(
                          margin: getMargin(
                              left: 17, top: 17, right: 17, bottom: 46),
                          decoration: AppDecoration.outlineLightblue90026
                              .copyWith(
                                  borderRadius:
                                      BorderRadiusStyle.roundedBorder20),
                          child: Obx(() => ListView.builder(
                              physics: BouncingScrollPhysics(),
                              shrinkWrap: true,
                              itemCount: controller.dashboardModelObj.value
                                  .dashboardItemList.length,
                              itemBuilder: (context, index) {
                                DashboardItemModel model = controller
                                    .dashboardModelObj
                                    .value
                                    .dashboardItemList[index];
                                return DashboardItemWidget(model);
                              })))
                    ])))));
  }

  onTapImgMenu() {
    _scaffoldKey.currentState?.openDrawer();
  }

  onTapColumntodaysturnove() {
    Get.toNamed(AppRoutes.orderByShippingMethodScreen);
  }

  onTapColumnorders() {
    Get.toNamed(AppRoutes.ordersScreen);
  }

  onTapColumnproducts() {
    Get.toNamed(AppRoutes.productsPerformanceScreen);
  }
}
