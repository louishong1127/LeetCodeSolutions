class Solution:
    def runningSum(self, nums: List[int]) -> List[int]:
        ans = []
        for idx, v in enumerate(nums):
            if idx != 0:
                ans.append(v + ans[idx - 1])
            else:
                ans.append(v)
        return ans

