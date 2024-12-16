<?php
defined('ABSPATH') || exit;

global $product;

$sale_price = $product->get_sale_price();
$regular_price = $product->get_regular_price();
$is_stock = $product->is_in_stock();
?>

<li class="productItem">
	<a href="<?php the_permalink(); ?>" class="group border border-gray-e7 bg-white block relative">
		<?php if ($sale_price) : ?>
			<ul class="badgeList">
				<li class="stock">
					Акция
				</li>
			</ul>
		<?php endif; ?>

		<div class="xl:h-[214px] h-[126px] flex justify-center items-center overflow-hidden">
			<?php the_post_thumbnail("medium", [
				"class" => "h-full w-full object-cover group-hover:scale-110",
			]) ?>
		</div>

		<div class="p-2.5 flex flex-col items-center gap-2.5">
			<h3 class="font-semibold xl:text-lg text-sm xl:leading-[23.4px] leading-[18.2px] text-center">
				<?php the_title(); ?>
			</h3>

			<?php if ($is_stock) : ?>
				<div href="<?php the_permalink(); ?>" class="flex xl:justify-center xl:gap-2 xl:flex-row flex-col items-center">
					<?php if ($sale_price) : ?>
						<span class="font-extrabold text-sm leading-[18.2px] line-through text-gray-ba">
							<?php echo wc_price($regular_price); ?>
						</span>
					<?php endif ?>

					<span class="font-black xl:text-2xl text-xl xl:leading-[31.2px] leading-[26px] text-red">
						<?= $sale_price ? wc_price($sale_price) : wc_price($regular_price); ?>
					</span>
				</div>
			<?php else: ?>
				<span class="text-red xl:text-xl text-base">
					Нет в наличии
				</span>
			<?php endif; ?>

			<button class="main-btn !w-full blue group-hover:bg-red">
				Подробнее
			</button>
		</div>
	</a>
</li>