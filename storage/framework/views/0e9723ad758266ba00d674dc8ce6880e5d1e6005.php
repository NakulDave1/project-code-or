<div class="item">
    <div class="single-products-box">
        <div class="products-image">
            <?php
                $photo = json_decode($item->images);
            ?>
            <a href="<?php echo e(route('product.detail', $item->slug)); ?>">
                <?php if($item->product_label != null): ?>
                    <div
                        class="
                <?php if($item->product_label == 'hot'): ?> hot-tag
                   <?php elseif($item->product_label == 'sale'): ?>
                    sale-tag
                    <?php else: ?>
                    new-tag <?php endif; ?>
                    ">
                        <?php echo e($item->product_label); ?>

                    </div>
                <?php endif; ?>
                <img style="border:1px solid #ddd"
                    src="<?php echo e($item->thumbnail_image ? asset($item->thumbnail_image) : Helper::DefaultImage()); ?>"
                    class="main-image" alt="image">

                <img style="border:1px solid #ddd"
                    src="
                                                            <?php echo e($photo != null ? ($photo[0] != null ? asset($photo[0]) : asset($photo[1])) : Helper::DefaultImage()); ?>"
                    class="hover-image" alt="image">
            </a>
        </div>
        <div class="products-content">
            <div class="wishlist-btn">
                <a href="javascript:;" class="add_to_wishlist" data-product-id="<?php echo e($item->id); ?>"
                    id="add_to_wishlist_<?php echo e($item->id); ?>">
                    <?php
                        if (\Illuminate\Support\Facades\Auth::check()) {
                            $already_wishlist = \App\Models\Wishlist::where('user_id', auth()->user()->id)
                                ->where('product_id', $item->id)
                                ->first();
                        } else {
                            $already_wishlist = null;
                        }
                    ?>
                    <?php if($already_wishlist != null): ?>
                        <i class="bx bxs-heart wishlist-icon" style="color:#FF757B"></i>
                    <?php else: ?>
                        <i class='bx bxs-heart wishlist-icon'></i>
                    <?php endif; ?>
                </a>
            </div>
            <h3><a href="<?php echo e(route('product.detail', $item->slug)); ?>"><?php echo e(ucfirst($item->title)); ?></a></h3>
            <div class="price">
                <?php if($item->discount > 0): ?>
                    <span class="new-price"><?php echo e(Helper::currency_converter($item->purchase_price)); ?></span>
                    <span class="old-price"><?php echo e(Helper::currency_converter($item->unit_price)); ?></span>
                <?php else: ?>
                    <span class="equal-price"><?php echo e(Helper::currency_converter($item->purchase_price)); ?></span>
                <?php endif; ?>
            </div>
            <div class="star-rating d-none">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/hpsystem/project/project-code/resources/views/frontend/partials/_single_product.blade.php ENDPATH**/ ?>