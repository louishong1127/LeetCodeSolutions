class Solution:
    def longestOnes(self, nums: List[int], k: int) -> int:
        ans = left = cur = 0

        for right in range(len(nums)):
            if nums[right] == 0:
                cur += 1

            while cur > k:
                if nums[left] == 0:
                    cur -= 1

                left += 1

            ans = max(ans, right - left + 1)

        return ans