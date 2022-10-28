import '../products_screen/widgets/products_item_widget.dart';
import 'controller/products_controller.dart';
import 'models/products_item_model.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';
import 'package:merchant_app/widgets/custom_button.dart';
import 'package:merchant_app/widgets/custom_text_form_field.dart';

class ProductsScreen extends GetWidget<ProductsController> {
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
                        crossAxisAlignment: CrossAxisAlignment.center,
                        mainAxisAlignment: MainAxisAlignment.center,
                        children: [
                      Align(
                          alignment: Alignment.centerLeft,
                          child: Container(
                              width: size.width,
                              margin: getMargin(top: 41),
                              child: Padding(
                                  padding: getPadding(left: 25, right: 227),
                                  child: Row(
                                      mainAxisAlignment:
                                          MainAxisAlignment.start,
                                      crossAxisAlignment:
                                          CrossAxisAlignment.center,
                                      mainAxisSize: MainAxisSize.min,
                                      children: [
                                        Padding(
                                            padding:
                                                getPadding(top: 7, bottom: 8),
                                            child: InkWell(
                                                onTap: () {
                                                  onTapImgArrowleft();
                                                },
                                                child: CommonImageView(
                                                    svgPath: ImageConstant
                                                        .imgArrowleft,
                                                    height:
                                                        getVerticalSize(14.00),
                                                    width: getHorizontalSize(
                                                        20.00)))),
                                        Padding(
                                            padding: getPadding(left: 18),
                                            child: Text("lbl_products".tr,
                                                overflow: TextOverflow.ellipsis,
                                                textAlign: TextAlign.left,
                                                style: AppStyle
                                                    .txtABeeZeeItalic30
                                                    .copyWith(height: 1.00)))
                                      ])))),
                      CustomTextFormField(
                          width: 361,
                          focusNode: FocusNode(),
                          controller: controller.groupTwentyController,
                          hintText: "lbl_search_product".tr,
                          margin: getMargin(left: 20, top: 24, right: 20),
                          variant: TextFormFieldVariant.OutlineBlack9007e,
                          textInputAction: TextInputAction.done),
                      CustomButton(
                          width: 178,
                          text: "lbl_add_product".tr,
                          margin: getMargin(left: 25, top: 24, right: 25),
                          alignment: Alignment.centerRight),
                      Padding(
                          padding: getPadding(
                              left: 20, top: 33, right: 20, bottom: 34),
                          child: Obx(() => ListView.builder(
                              physics: BouncingScrollPhysics(),
                              shrinkWrap: true,
                              itemCount: controller.productsModelObj.value
                                  .productsItemList.length,
                              itemBuilder: (context, index) {
                                ProductsItemModel model = controller
                                    .productsModelObj
                                    .value
                                    .productsItemList[index];
                                return ProductsItemWidget(model);
                              })))
                    ])))));
  }

  onTapImgArrowleft() {
    Get.back();
  }
}
